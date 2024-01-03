<?php

$error = $argv[1];

if (substr($error, 0, 7) === 'errors/') {
	$error = substr($error, 7);
}

if (substr($error, -4) === '.ini') {
	$error = substr($error, 0, -4);
}

if (!file_exists('errors/'.$error.'.ini')) {
	print "No such error message as '$error' in errors/\n. Omitting.";
	die();
}

shell_exec('git stage \'errors/'.addslashes($error).'.ini\'');
shell_exec('git add \'messages/'.addslashes($error).'.rst\'');
shell_exec('git stage message.rst');
shell_exec('git stage sitemap.xml');

print "git commit -m 'Updated description of ".$error."' \n";
?>