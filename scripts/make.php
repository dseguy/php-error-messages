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
$errors = [];
$tips = array();
foreach($files as $file) {
	$error = parse_ini_file($file);

	if ($error === null) {
		print "Warning : $file is not valid INI\n";
		continue;
	}

	$error = (object) $error;
	if (!isset($error->error)) {
		print "No error for $file\n";
	} else {
		if (!str_contains($error->error, ' ')) {
			print "suspiciously no white space in error for $file\n";
		}
	}

	if (isset($error->seeAlso)) {
		$error->seeAlso = array_filter($error->seeAlso);
	} else {
		print "Missing seeAlso in $file\n";
		
		if (!is_array($seeAlso)) {
			print "seeAlso is not an array in $file\n";
		}
	}
	$errors[$file] = $error;
}

$errorlist = [];
foreach($errors as $file => $message) {
	$entry = [];
	
	$entry[] = $message->error;
	$entry[] = str_repeat('-', strlen($message->error));
	$entry[] = ' ';

	$entry[] = 'Description';
	$entry[] = str_repeat('_', strlen('Description'));
	$entry[] = ' ';
	$entry[] = $message->description;

	$entry[] = 'Example';
	$entry[] = str_repeat('_', strlen('Example'));
	$entry[] = '';
	$entry[] = '.. code-block:: output';
	$entry[] = '';
	$code = $message->code;
	$code = '   '.str_replace("\n", "\n   ", $code);

	$entry[] = $code;
	$entry[] = '';

	$name = $message->id;
	file_put_contents('messages/'.$name.'.rst', implode(PHP_EOL, $entry));
	
	$errorlist[] = '   messages/'.$name.'.rst';
	
	$sitemap->addItem('https://php-error-messages.readthedocs.io/en/latest/messages/'.$message->id.'.html');
}

$changed = file_get_contents('message.rst.in');
$changed = str_replace('errorlist', implode(PHP_EOL, $errorlist), $changed);
file_put_contents('message.rst', $changed);
print "processed ".count($files)." files\n";

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