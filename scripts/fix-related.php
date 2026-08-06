<?php
/**
 * Reads build.log for "X lacks a related[] to Y" lines and appends
 * related[] = "Y" to errors/X.ini, right after the last existing
 * related[] line (or before examples[] if none exist).
 */

$root = dirname(__DIR__);
$buildLog = $root . '/build.log';
$errorsDir = $root . '/errors';

$log = file_get_contents($buildLog);
if ($log === false) {
	fwrite(STDERR, "Could not read $buildLog\n");
	exit(1);
}

$added = 0;
$skipped = 0;
$missing = 0;
$invalid = 0;

foreach (explode("\n", $log) as $line) {
	if (!preg_match('/^(.*) lacks a related\[\] to (.*)$/', $line, $m)) {
		continue;
	}

	[, $origin, $target] = $m;
	$file = $errorsDir . '/' . $origin . '.ini';

	if (!is_file($file)) {
		fwrite(STDERR, "Missing file: $file\n");
		++$missing;
		continue;
	}

	$contents = file_get_contents($file);
	$escapedTarget = str_replace('"', '\"', $target);
	$newLine = 'related[] = "' . $escapedTarget . '"';

	if (strpos($contents, $newLine) !== false) {
		++$skipped;
		continue;
	}

	$lines = explode("\n", $contents);
	$insertAt = null;

	foreach ($lines as $i => $l) {
		if (preg_match('/^related\[\]\s*=/', $l)) {
			$insertAt = $i + 1;
		}
	}

	if ($insertAt === null) {
		foreach ($lines as $i => $l) {
			if (preg_match('/^examples\[\]\s*=/', $l)) {
				$insertAt = $i;
				break;
			}
		}
	}

	if ($insertAt === null) {
		fwrite(STDERR, "Could not find insertion point in $file\n");
		continue;
	}

	array_splice($lines, $insertAt, 0, [$newLine]);
	$updated = implode("\n", $lines);
	file_put_contents($file, $updated);

	// Validate using the same call make.php uses to parse these files, and
	// confirm the value actually round-trips: parse_ini_file silently
	// truncates malformed quoting instead of returning false.
	$parsed = @parse_ini_file($file, INI_SCANNER_RAW);
	$relatedValues = $parsed !== false ? (array) ($parsed['related'] ?? []) : [];
	if ($parsed === false || !in_array($target, $relatedValues, true)) {
		file_put_contents($file, $contents);
		fwrite(STDERR, "Invalid INI after edit, reverted: $file\n");
		++$invalid;
		continue;
	}

	echo "Added \"$target\" to $file\n";
	++$added;
}

echo "\nDone: $added added, $skipped already present, $missing missing files, $invalid invalid (reverted).\n";
