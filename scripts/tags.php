<?php

$files = glob('errors/*.ini');

$tags = array();
foreach($files as $file) {
	$ini = parse_ini_file($file);
	
	foreach(array_filter($ini['tags']) as $tag) {
		@$tags[$tag]++;
	}
}

asort($tags);
print_r($tags);

?>