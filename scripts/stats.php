<?php

$files = glob('errors/*.ini');
$files = array_diff($files, array('errors/skeleton.ini'));

$stats = array('seeAlso' => 0,
			   'alternative' => 0,
			   'words' => 0,
			   'total' => 0,
				);

foreach($files as $file) {
	$ini = parse_ini_file($file, INI_SCANNER_RAW);
	
	if ($ini === null) {
		print "Can't parse INI file $file\n";
		continue;
	}
	
	$stats['total']++;
	
	$ini = (object) $ini;
	
	$stats['words'] += str_word_count($ini->description);
	$stats['seeAlso'] += count(array_filter($ini->seeAlso));
	$stats['alternative'] += count(array_filter($ini->alternative));
}

print_r($stats);

?>