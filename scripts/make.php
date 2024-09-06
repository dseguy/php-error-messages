<?php

include 'vendor/autoload.php';

use samdark\sitemap\Sitemap;
use samdark\sitemap\Index;


const LEVELS = array('E_NOTICE' => 1,
					 'E_COMPILATION_ERROR' => 1,
					 'E_WARNING' => 1,
					 'E_COMPILE_ERROR' => 1,
					 'E_ERROR' => 1,
					 'E_COMPILE_WARNING' => 1,
					 'E_DEPRECATED' => 1,
					 'E_CORE_WARNING' => 1,
					);

// create sitemap
$sitemap = new Sitemap('./sitemap.xml');

if (!file_exists('messages')) {
	mkdir('messages', 0755);
} else {
	shell_exec('rm -rf messages/*');
}
fopen("build.log", "w+");

$behaviors = array();

$behaviors[] = "PHP Error Messages";
$behaviors[] = "------------------";
$behaviors[] = "";

$files = glob('errors/*.ini');
$files = array_diff($files, ['errors/skeleton.ini']);
$stats = array('author' => 0,
				);
$errors   = array();
$titles   = array();
$reciproq = array();
$nextprev = array();
$tips     = array();
$warnings = 0;
foreach($files as $file) {
	$error = parse_ini_file($file, INI_SCANNER_RAW);

	if ($error === null) {
		buildlog("Warning : $file is not valid INI");
		++$warnings;
		continue;
	}

	$error = (object) $error;
	if (!isset($error->id)) {
		buildlog("No id for $file");
		++$warnings;
		continue;
	}

	if (empty($error->description)) {
		buildlog("No description for $file");
		++$warnings;
		continue;
	}

	if (!is_array($error->tags)) {
		print("No array for tags in $file\n");
		buildlog("No array for tags in $file");
		++$warnings;
		continue;
	}
	
	$error->generated = !in_array('not generated', $error->tags,  true);

	if (!isset($error->previous)) {
		buildlog("No previous for $file");
		++$warnings;
		continue;
	} elseif (!empty($error->previous)) {
		if (!file_exists('errors/'.$error->previous.'.ini')) {
			buildlog($error->previous." doesn't exist as a previous error");
			++$warnings;
		} else {
			$target = str_replace(array('errors/', '.ini'), '', $file);
			if (isset($nextprev[$target])) {
				unset($nextprev[$target]);
			} else {
				$nextprev[$error->previous] = $target;
			}
		}
	}

	if (!isset($error->next)) {
		buildlog("No next for $file");
		++$warnings;
		continue;
	} elseif (!empty($error->next)) {
		if (!file_exists('errors/'.$error->next.'.ini')) {
			buildlog($error->next." doesn't exist as a next error in $file");
			++$warnings;
		} else {
			$target = str_replace(array('errors/', '.ini'), '', $file);
			if (isset($nextprev[$target])) {
				unset($nextprev[$target]);
			} else {
				$nextprev[$error->next] = $target;
			}
		}
	}

	if (!$error->generated) {
		// ignore
	} elseif (empty($error->level)) {
		buildlog("No level for $file");
		++$warnings;
		continue;
	} else {
		if (!isset(LEVELS[$error->level])) {
			buildlog("Unknonwn level '$error->level' for $file");
			++$warnings;
		}
	}

	if (!$error->generated) {
		// ignore
	} elseif (empty($error->alternative)) {
		buildlog("No alternative for $file");
		++$warnings;
		continue;
	} else {
		if (!is_array($error->alternative)) {
			buildlog("Alternative must be an array in $file");
			++$warnings;
			continue;
		}
		
		foreach($error->alternative as $key => $alternative) {
			if (empty($alternative)) {
				buildlog("Alternative is empty in $file");
				++$warnings;
				continue;
			}
			
			if ($alternative[0] !== strtoupper($alternative[0])) {
				buildlog("Alternative[$key] doesn't start with Uppercase in $file");
				++$warnings;
			}

			if (substr($alternative, -1) !== '.') {
				buildlog("Alternative[$key] must finish with . in $file");
				++$warnings;
			}
		}
	}
	
	if (!isset($error->error)) {
		buildlog("No error for $file");
		++$warnings;
	} else {
		if (!str_contains($error->error, ' ')) {
			buildlog("suspiciously no white space in error for $file");
			++$warnings;
		}
	}

	if (isset($error->related)) {
		$error->related = array_filter($error->related);
		
		if (count($error->related) !== count(array_unique($error->related))) {
			buildlog("'$related' has duplicates in $file");
		}
		
		foreach($error->related as $related) {
			if (!file_exists('errors/'.$related.'.ini')) {
				buildlog("No such related file as '$related' in $file");
				++$warnings;
			} else {
				$target = str_replace(array('errors/', '.ini'), '', $file);
				$hash = $target.' - '.$related;
				if (isset($reciproq[$hash])) {
					unset($reciproq[$hash]);
				} else {
					$reciproq[$related . ' - ' . $target] = $target;
				}
			}
		}
		
		// @todo : make and chedk the way back too
	}
	
	if (isset($error->seeAlso)) {
		$error->seeAlso = array_filter($error->seeAlso);
		
		foreach($error->seeAlso as $key => $url) {
			if (is_numeric($key)) {
				buildlog("seeAlso has a numeric key in $file");
				++$warnings;
			}
			
			if (!filter_var($url, FILTER_VALIDATE_URL)) {
				buildlog("seeAlso[$key] is not a URL in $file");
				++$warnings;
			}
		}
	} else {
		buildlog("Missing seeAlso in $file");
		++$warnings;
		
		if (!is_array($seeAlso)) {
			buildlog("seeAlso is not an array in $file");
			++$warnings;
		}
	}
	$errors[$file] = $error;
	$titles[basename($file, '.ini')] = $error->error;
}

if (!empty($reciproq)) {
	foreach($reciproq as $origin => $target) {
		buildlog("$origin lacks a related[] to $target");
		++$warnings;
	}
}

if (!empty($nextprev)) {
	foreach($nextprev as $origin => $target) {
		buildlog("$origin lacks a previous or next to $target");
		++$warnings;
	}
}


$errorlist = [];
foreach($errors as $file => $message) {
	$entry = [];

    $entry[] = ".. _".$message->id.":";
	$entry[] = '';
	
	$entry[] = $message->error;
	$entry[] = str_repeat('-', strlen($message->error));
	$entry[] = ' ';

	$entry[] = '	.. meta::';
	$entry[] = '		:description lang=en:';
	$first = preg_split('/[\.\?;'.PHP_EOL.']/', $message->description)[0];
	$entry[] = '			'.$message->error.': '.$first.'.';
	$entry[] = '';

	$entry[] = 'Description';
	$entry[] = str_repeat('_', strlen('Description'));
	$entry[] = ' ';
	$entry[] = $message->description;
	$entry[] = '';

	$entry[] = 'Example';
	$entry[] = str_repeat('_', strlen('Example'));
	$entry[] = '';
	$entry[] = '.. code-block:: php';
	$entry[] = '';
	$code = $message->code;
	$code = '   '.str_replace("\n", "\n   ", $code);

	$entry[] = $code;
	$entry[] = '';

	if (!empty($message->alternative)) {
		$entry[] = 'Solutions';
		$entry[] = str_repeat('_', strlen('Solutions'));
		$entry[] = '';
		
		foreach($message->alternative as $alternative) {
			$entry[] = '+ '.$alternative;
		}
		$entry[] = '';
	}

	if (0 && !empty($message->related)) {
		$entry[] = 'Related messages';
		$entry[] = str_repeat('_', strlen('Related messages'));
		$entry[] = '';
		
		foreach($message->related as $related) {
			$entry[] = '+ `'.$related.'`_';
		}
		$entry[] = '';
	}

	if (!empty($message->related)) {
		$entry[] = 'Related Error Messages';
		$entry[] = str_repeat('_', strlen('Related Error Messages'));
		$entry[] = '';
		
		foreach($message->related as $target) {
			$entry[] = '+ :ref:`'.$target.'`';
		}
		$entry[] = '';
	}

	if (!empty($message->seeAlso)) {
		$entry[] = 'See Also';
		$entry[] = str_repeat('_', strlen('See Also'));
		$entry[] = '';
		
		foreach($message->seeAlso as $name => $url) {
			$entry[] = '+ `'.$name.' <'.$url.'>`_';
		}
		$entry[] = '';
	}

	if (!empty($message->previous)) {
		$entry[] = '';
		$entry[] = "In previous PHP versions, this error message used to be :ref:`".$message->previous."`.";
		$entry[] = '';
	}

	if (!empty($message->next)) {
		$entry[] = '';
		$entry[] = "In more recent PHP versions, this error message is now :ref:`".$message->next."`.";
		$entry[] = '';
	}

	$name = $message->id;
	file_put_contents('messages/'.$name.'.rst', implode(PHP_EOL, $entry));
	
	$errorlist[] = '   messages/'.$name.'.rst';
	
	$sitemap->addItem('https://php-errors.readthedocs.io/en/latest/messages/'.$message->id.'.html');
}

$changed = file_get_contents('message.rst.in');
$changed = str_replace('errorlist', implode(PHP_EOL, $errorlist), $changed);
file_put_contents('message.rst', $changed);
print "processed ".count($files)." files\n";
print "warnings: $warnings\n";

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


function buildlog($message) {
	static $log;
	
	if (empty($log)) {
		$log = fopen("build.log", "w+");
	}
	
	fwrite($log, $message.PHP_EOL);
}

?>