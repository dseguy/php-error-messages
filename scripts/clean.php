<?php

include 'vendor/autoload.php';

$file = $argv[1];

print "cleaning $file\n";
$reader = new Matomo\Ini\IniReader();

$array = $reader->readFile($file);
print_r($array);

$writer = new Matomo\Ini\IniWriter();
$writer->writeToFile('test.ini', [$array]);

?>