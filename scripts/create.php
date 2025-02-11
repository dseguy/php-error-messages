<?php

if (isset($argv[2])) {
	$message = implode(' ', array_slice($argv, 1));
} else {
	$message = $argv[1];
}

print "Creating entry for '$message'\n";

$name = strtolower($message);
$name = trim($name);
$name = str_replace(' ', '-', $name);
$name = str_replace('/', '-', $name);

if (file_exists('errors/'.$name.'.ini')) {
	print "There is already an entry for 'errors/$name.ini'. Aborting\n";
	die();
}

$ini = file_get_contents('errors/skeleton.ini');
$ini = str_replace('id = ""', 'id = "'.addslashes($name).'"', $ini);
$ini = str_replace('error = ""', 'error = "'.addslashes($message).'"', $ini);
if (str_contains($message, 'syntax error')) {
    $ini = str_replace('tags[] = ""', 'tags[] = "syntax-error"'.PHP_EOL.'tags[] = ""', $ini);
    $ini = str_replace('phpVersion = ""', 'phpVersion = "7.0+"', $ini);
    $ini = str_replace('level = ""', 'level = "E_COMPILE_ERROR"', $ini);
}

// @todo : also add a call to getMessage to find more details about the error message
//print shell_exec('cd ../../bin/; php getMessage "'.$message.'"');

file_put_contents('errors/'.$name.'.ini', $ini);

print "New entry for \"errors/".addslashes($name).".ini\"\n";

?>