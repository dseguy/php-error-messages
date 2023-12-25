<?php

include 'vendor/autoload.php';

use samdark\sitemap\Sitemap;
use samdark\sitemap\Index;

// create sitemap
$sitemap = new Sitemap('./sitemap.xml');

if (!file_exists('messages')) {
	mkdir('messages', 0755);
} else {
	shell_exec('rm -rf messages/*');
}

$behaviors = array();

$behaviors[] = "PHP Error Messages";
$behaviors[] = "------------------";
$behaviors[] = "";

$files = glob('errors/*.ini');
$files = array_diff($files, ['errors/skeleton.ini']);
$stats = array('author' => 0,
				);
$errors = 0;
$tips = array();
foreach($files as $file) {
	$tip = parse_ini_file($file);

	if ($tip === null) {
		print "Warning : $file is not valid INI\n";
		continue;
	}

	$tip = (object) $tip;
	if (!isset($tip->title)) {
		print "No title for $file\n";
	} else {
		if (!str_contains($tip->title, ' ')) {
			print "suspiciously no white space in title for $file\n";
		}
	}

	if (isset($tip->seeAlso)) {
		$tip->seeAlso = array_filter($tip->seeAlso);
	} else {
		print "Missing seeAlso in $file\n";
		
		if (!is_array($seeAlso)) {
			print "seeAlso is not an array in $file\n";
		}
	}
	$tips[$file] = $tip;
}

uksort($tips, function(string $a, string $b) : int { return strtolower($a) <=> strtolower($b); });

$php = array('7.2' => [],
			 '7.3' => [],
			 '7.4' => [],
			 '8.0' => [],
			 '8.1' => [],
			 '8.2' => [],
			 '8.3' => [],
			 '8.4' => [],
			 '9.0' => [],
			);
$stats = array('php' => 0);

$errorlist = [];
foreach($tips as $file => $message) {
	print_r($message);
	$entry = [];
	
	$entry[] = $message->error;
	$entry[] = str_repeat('-', strlen($message->error));
	$entry[] = ' ';

	$name = $message->id;
	file_put_contents('messages/'.$name.'.rst', implode(PHP_EOL, $entry));
	
	$errorlist[] = '   messages/'.$name.'.rst';
	
	$sitemap->addItem('https://php-error-messages.readthedocs.io/en/latest/messages/'.$message->id.'.html');
}

$changed = file_get_contents('message.rst.in');
$changed = str_replace('errorlist', implode(PHP_EOL, $errorlist), $changed);
file_put_contents('message.rst', $changed);
print "processed ".count($files)." file with $errors error\n";

$sitemap->write();

function check(stdClass $tip, string $file) : string {
	if (empty($tip->title)) {
		print "Empty title in $file\n";
	}

	return '';
}

function make_anchor(string $title) : string {
	$title = '`'.strtr(strtolower($title), ' ', '-').'`';
	return $title;
}

?>