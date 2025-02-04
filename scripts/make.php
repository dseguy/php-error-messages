<?php

// @todo : when the version is not 8.x+, there should be a next
// Unless the error is removed. 
// @todo : when the version is not 7.0, there should be a previous

include 'vendor/autoload.php';

use samdark\sitemap\Sitemap;
use samdark\sitemap\Index;

const MINIMUM_DESCRIPTION_SIZE = 100;


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

const BASE_KEYS = [
'examples',
'id',
'error',
'phpVersion',
'level',
'exception',
'code',
'description',
'alternative',
'related',
'tags',
 'seeAlso',
 'features',
 'previous',
 'next',
 'phpError',
 'changedBehavior',
 'extension',
 'analyzer',
 '3v4l'
];

$behaviors = array();

$behaviors[] = "PHP Error Messages";
$behaviors[] = "------------------";
$behaviors[] = "";

$files = glob('errors/*.ini');
$files = array_diff($files, ['errors/skeleton.ini']);
//$files = array_slice($files, 0, 10);

$stats = array('author' => 0,
				);
$errors   = array();
$syntaxErrors = array();
$titles   = array();
$reciproq = array();
$nextprev = array();
$tips     = array();
$tags     = array();
$features = array();
$ids      = array();
$extensions = array();
$rules = array();
$links = 0;
$warnings = 0;
foreach($files as $file) {
    $raw = file_get_contents($file);
	$error = parse_ini_file($file, INI_SCANNER_RAW);
	
	if (isset($errors[$file])) {
		die("Warning : $file has a duplicate name");
	}

	if ($error === false) {
		buildlog("Warning : $file is not valid INI");
		die("Warning : $file is not valid INI");
	}

    $keys = array_keys($error);
    if ($diff = array_diff($keys, BASE_KEYS)) {
        buildlog( count($diff). " keys are unknown in $file: ".implode(', ', $diff));
		++$warnings;
    }

	$error = (object) $error;
	if (!isset($error->id)) {
		buildlog("No id for $file");
		++$warnings;
		continue;
	}
	
	if (isset($errors[$error->id])) {
		die("Duplicate id in $file");
	}
	
	$ids[$error->id] = 1;
	
	if (str_contains($error->error, '%') && !isset($error->examples)) {
		buildlog("No examples for $file");
		++$warnings;
	}

	if (empty($error->description) && !in_array('not generated', $error->tags)) {
		buildlog("No description for $file");
		++$warnings;
		continue;
	} elseif (strlen($error->description) < MINIMUM_DESCRIPTION_SIZE) {
		buildlog("Description is too short: ".strlen($error->description)." for $file");
		++$warnings;
	} elseif ($error->description[-1] !== '.') {
		buildlog("Description is not finished by a dot for $file");
		++$warnings;
	}

	if (isset($error->examples) && empty($error->examples)) {
		buildlog("Empty examples for $file");
		++$warnings;
		print "Omitting $file\n";
		continue;
	}

	if (isset($error->examples) && !is_array($error->examples)) {
		buildlog("Examples should be an array for $file");
		++$warnings;
		print "Omitting $file\n";
		continue;
	}
	
	if (isset($error->examples)) {
    	$error->examples = array_filter($error->examples);
    	
    	foreach($error->examples as $example) {
    	    if (str_contains($example, '%')) {
        		buildlog("Suspicious % in example '$example' in $file");
    	    }
    	}
	}

	if (!is_array($error->tags)) {
		print("No array for tags in $file\n");
		buildlog("No array for tags in $file");
		++$warnings;
		continue;
	} else {
		foreach(array_filter($error->tags) as $tag) {
			$target = str_replace(array('errors/', '.ini'), '', $file);
			$target = addcslashes($target, '`\'');
			$tags[$tag][] = $target;
		}
		
		if (str_contains($error->error, 'syntax error') && !in_array('syntax-error', $error->tags)) {
    		buildlog("Missing syntax-error in $file");
    		++$warnings;
		}
		
		if (in_array('not-generated', $error->tags)) {
		    $error->description = "This error could not be reproduced so far. Help us by sending us any generating code.";
		}
	}

	if (empty($error->code) && !in_array('not generated', $error->tags)) {
		buildlog("No code for $file");
		++$warnings;
		continue;
	} elseif (!in_array('not generated', $error->tags) && substr($error->code, 0, 5) !== '<?php') {
		buildlog("No opening tags in code for $file");
		++$warnings;
	} elseif (!in_array('no-closing-tag', $error->tags) && !in_array('not generated', $error->tags) && substr($error->code, -2) !== '?>') {
		buildlog("No closing tags in code for $file");
		++$warnings;
	}

	if (preg_match('/(trait|class|enum|interface|const|new|implements|extends|:|namespace) (?!(int|string|bool|void|never|float|callable|array|iterable|mixed|null|stdClass))[a-z]/', $error->code, $r)) {
		buildlog("No lower case name '$r[0]' in code in $file");
		++$warnings;
	}

	if (!is_array($error->features)) {
		buildlog("No array for features in $file");
		++$warnings;
		continue;
	} else {
		if (empty(array_filter($error->features)) && !in_array('not generated', $error->tags)) {
			buildlog("No features in $file");
			++$warnings;
		}
		foreach(array_filter($error->features) as $feature) {
			$target = str_replace(array('errors/', '.ini'), '', $file);
			$target = addcslashes($target, '`\'$');
			
			if (!file_exists("../analyzeG3/human/en/Features/$feature.ini")) {
				buildlog("No file feature known for $feature in ".addcslashes($file, '`\''));
				++$warnings;
			}
			$features[$feature][] = $target;
		}
	}
	
	$error->generated = !in_array('not generated', $error->tags,  true);

	if (!isset($error->previous)) {
		buildlog("No previous for $file");
		++$warnings;
		continue;
	} elseif ($error->previous === 'no-previous-error') {
	    // just omits
	} elseif (!empty($error->previous)) {
		if (!file_exists('errors/'.$error->previous.'.ini')) {
			buildlog($error->previous." doesn't exist as a previous error in $file");
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
	} elseif ($error->next === 'no-next-error') {
	    // just omits
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

	if (!isset($error->analyzer)) {
//		buildlog("No analyzer entry for $file");
//		++$warnings;
//		continue;
	} else {
	    $error->analyzer = array_filter($error->analyzer);
	    
	    foreach($error->analyzer as $analyze) {
    	    if (!file_exists('../analyzeG3/human/en/'.$analyze.'.ini')) {
	    		buildlog($analyze." doesn't exist as an exakat rule in $file");
		    	++$warnings;
    	    } else {
    	        $rules[$analyze] ??= 0;
    	        @$rules[$analyze]++;
    	    }
	    }
	}

	if (empty($error->phpVersion)) {
		buildlog("Empty phpVersion for $file");
		++$warnings;
		continue;
	} else {
	    if ($error->phpVersion[-1] !== '+' && $error->phpVersion[-1] !== '-' && empty($error->next)) {
	        buildlog("The error '$error->id' was finished in $error->phpVersion");
    		++$warnings;
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

	if (isset($error->extension)) {
	    if (empty($error->extension)) {
    		buildlog("Empty extension for $file");
	    	++$warnings;
	    } elseif (!is_array($error->extension)) {
    		buildlog("extension should be an array in $file");
	    	++$warnings;
	    } else {
	        $error->extension = array_filter($error->extension);
	        foreach($error->extension as $extension) {
	            if (!file_exists("../analyzeG3/human/en/Features/$extension.ini")) {
            		buildlog("extension $extension is not defined in the dictionary in $file");
	            	++$warnings;
	            }
	            
	            $extensions[$extension] ??= 0;
	            ++$extensions[$extension];
	        }
	    }
	}

	if (isset($error->related)) {
		$error->related = array_filter($error->related);
		
		if (count($error->related) !== count(array_unique($error->related))) {
			buildlog("'$related' has duplicates in $file");
		}
		
		foreach($error->related as $related) {
			if (!file_exists('errors/'.$related.'.ini')) {
			    if (str_contains(' ', $related)) {
			        buildlog("related should not contain spaces in $file.");
			    }
				buildlog("No such related file as '$related' in $file");
				++$warnings;
				die("No such related file as '$related' in $file");
			} else {
				$target = str_replace(array('errors/', '.ini'), '', $file);
				$hash = $target.' - '.$related;
				if (isset($reciproq[$hash])) {
					unset($reciproq[$hash]);
				} else {
					$reciproq[$related . ' - ' . $target] = $target;
				}
			}
			
		    ++$links;
			if ($target === $related) {
				buildlog("Remove self related '$target' in $file");
				++$warnings;
			}
		}
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
	
	if (in_array('syntax-error', $error->tags, true)) {
	    $syntaxErrors[$error->error] = $error->id;
	}
	$errors[$file] = $error;
	$titles[basename($file, '.ini')] = $error->error;
}

if (!empty($reciproq)) {
	foreach($reciproq as $origin => $target) {
		[$a, $b] = explode(' - ', $origin);
		[$o, $t] = explode(' - ', $origin);
		buildlog("$o lacks a related[] to $t");
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

    $entry[] = ".. _".addcslashes($message->id, '$').":";
	$entry[] = '';
	
	$entry[] = $message->error;
	$entry[] = str_repeat('-', strlen($message->error));
	$entry[] = ' ';

	$first = preg_split('/[\.\?;'.PHP_EOL.']/', $message->description)[0];

	$entry[] = '.. meta::';
	$entry[] = '	:description:';
	$entry[] = '		'.$message->error.': '.htmlspecialchars($first).'.';
	$entry[] = '	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png';
	$entry[] = '	:og:type: article';
	$entry[] = '	:og:title: '.htmlspecialchars($message->error);
	$entry[] = '	:og:description: '.htmlspecialchars($first);
	$entry[] = '	:og:url: https://php-errors.readthedocs.io/en/latest/messages/'.urlencode(basename($file, '.ini')).'.html';
	$entry[] = '	:og:locale: en';
	$entry[] = '	:twitter:card: summary_large_image';
	$entry[] = '	:twitter:site: @exakat';
	$entry[] = '	:twitter:title: '.$message->error.'';
	$entry[] = '	:twitter:description: '.$message->error.': '.$first.'';
	$entry[] = '	:twitter:creator: @exakat';
	$entry[] = '	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png';

	$entry[] = '';
	
	$entry[] = '.. raw:: html';
	$entry[] = '';
	$ldjson = ['@context' => "https://schema.org",
	    '@graph' => [
	        ["@type" => "WebPage",
	        "@id" => "https://php-errors.readthedocs.io/en/latest/tips/".$message->id.".html",
	        "url" => "https://php-errors.readthedocs.io/en/latest/tips/".$message->id.".html",
	        "name" => $message->error,
	        "isPartOf" => [
	            "@id" =>  "https://www.exakat.io/"
	        ],
	        "datePublished" => date('r', filectime($file)),
	        "dateModified" => date('r', filemtime($file)),
	        "description" => $first,
	        "inLanguage" => 'en-US',
	        "potentialAction" => [
	            [
	            '@type' => 'ReadAction',
	            'target' => ["https://php-tips.readthedocs.io/en/latest/tips/".$message->id.".html"]
	            ]
	        ],
	        
	        ],
	        ["@type" => "WebSite",
	         "@id"=>  "https://www.exakat.io/",
             "url"=>  "https://www.exakat.io/",
             "name"=>  "Exakat",
             "description"=>  "Smart PHP static analysis",
             "inLanguage"=>  "en-US"
            ],
	    ]
	
	];

	$entry[] = '	<script type="application/ld+json">'.json_encode($ldjson).'</script>';
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

    if (!empty($message->examples)) {
		$entry[] = '';
		
    	$entry[] = 'Literal Examples';
	    $entry[] = str_repeat('*', strlen('Example Examples'));
		foreach($message->examples as $example) {
			$entry[] = '+ '.$example;
		}
		$entry[] = '';
	}
	
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

	if (!empty($message->previous) && $message->previous !== 'no-previous-error') {
		$entry[] = '';
		$entry[] = "In previous PHP versions, this error message used to be :ref:`".$message->previous."`.";
		$entry[] = '';
	}

	if (!empty($message->next) && $message->next !== 'no-next-error') {
		$entry[] = '';
		$entry[] = "In more recent PHP versions, this error message is now :ref:`".$message->next."`.";
		$entry[] = '';
	}

	if (isset($message->changedBehavior)) {
		$entry[] = 'Changed Behavior';
		$entry[] = str_repeat('_', strlen('Changed Behavior'));
		$entry[] = '';
		$e = "This error may appear in different PHP versions ";
		if (!is_iterable($message->changedBehavior)) {
		    die("changedBehavior is not an array in $file\n");
		}
		foreach($message->changedBehavior as $behavior) {
			$e .= "`".$behavior." <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/".$behavior.".html>`_, ";
		}
		$entry[] = trim($e, ', ').'.';
		$entry[] = '';
	}

	$name = $message->id;
	file_put_contents('messages/'.$name.'.rst', implode(PHP_EOL, $entry));
	
	$errorlist[] = '   messages/'.$name.'.rst';
	
	$sitemap->addItem('https://php-errors.readthedocs.io/en/latest/messages/'.urlencode($message->id).'.html');
}

$changed = file_get_contents('message.rst.in');
$changed = str_replace('errorlist', implode(PHP_EOL, $errorlist), $changed);
file_put_contents('message.rst', $changed);

$tagsRst = array('.. _tagsindex:',
'',
'Tag index',
'-----------------------------',
'',
);
ksort($tags);
foreach($tags as $tag => $refs) {
	$tagsRst[] = '';
	$tagsRst[] = '   * '.$tag;
	$tagsRst[] = '';
	foreach($refs as $ref) {
		$tagsRst[] = '      * :ref:`'.$ref.'`';
	}
	$tagsRst[] = '';
}

file_put_contents('tagsindex.rst', implode(PHP_EOL, $tagsRst));


$featuresRst = array('.. _featuresindex:',
'',
'Features index',
'-----------------------------',
'',
);
ksort($features);
foreach($features as $feature => $refs) {
	$featuresRst[] = '';
	$featuresRst[] = '   * '.$feature;
	$featuresRst[] = '';
	foreach($refs as $ref) {
		$featuresRst[] = '      * :ref:`'.$ref.'`';
	}
	$featuresRst[] = '';
}

file_put_contents('featuresindex.rst', implode(PHP_EOL, $featuresRst));

$syntaxErrorsRst = array('.. _syntaxerror:',
'',
'Syntax errors',
'-----------------------------',
'',
'Here is a list of classic syntax errors, met in every day code. Some common solutions are listed with them, so as to help anyone meeting them.',
'',
);
ksort($syntaxErrors);
$syntaxErrorsRst[] = '';
foreach($syntaxErrors as $title => $ref) {
	$syntaxErrorsRst[] = '      * :ref:`'.$ref.'`';
}
$syntaxErrorsRst[] = '';

file_put_contents('syntaxerror.rst', implode(PHP_EOL, $syntaxErrorsRst));


// Final summary
print "processed ".count($tags)." tags\n";
print "processed ".count($syntaxErrors)." syntax errors\n";
print "processed ".count($features)." features\n";
print "processed ".count($files)." files\n";
print "processed ".count($rules)." rules\n";
print "processed ".count($extensions)." extensions\n";
print "processed $links related\n";
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
	$title = addslashes($title, '$');
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