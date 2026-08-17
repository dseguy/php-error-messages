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
$sitemap = new Sitemap('./src/sitemap.xml');
$llmsTxt = [];

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
//$files = ['errors/namespace--%s-is-ok.ini',];

$gitDates = buildGitDates('errors');

$stats = array('author' => 0,
				);
$errors       = array();
$syntaxErrors = array();
$titles       = array();
$reciproq     = array();
$nextprev     = array();
$tips         = array();
$tags         = array();
$features     = array();
$ids          = array();
$extensions   = array();
$deprecated   = array();
$analyzers    = array();
$rules        = array();
$links    = 0;
$warnings = 0;
foreach($files as $file) {
//    if (str_contains($file, "'")) { continue; }
    $raw = file_get_contents($file);
    
    if (str_contains($raw, '```')) {
		buildlog("Warning : $file contains triple `.");
		++$warnings;
    }

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
        die( count($diff). " keys are unknown in $file: ".implode(', ', $diff));
		++$warnings;
    }

	$error = (object) $error;

	if (isset($gitDates[$file])) {
		$error->added    = $gitDates[$file]['added'];
		$error->modified = $gitDates[$file]['modified'];
	} else {
		// Untracked/uncommitted file: no git history yet, fall back to filesystem mtime.
		$error->added = $error->modified = date(DateTime::ATOM, filemtime($file));
	}

	if (!isset($error->id)) {
		buildlog("No id for $file");
		++$warnings;
		continue;
	}
	
	if ($error->id !== basename($file, '.ini')) {
		buildlog("Asynch id and file name $error->id <=> ".basename($file, '.ini')."\n");
		++$warnings;
	}
	$error->id = trim($error->id, '_`');
	
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
	} else {
	    if (strlen($error->description) < MINIMUM_DESCRIPTION_SIZE && 
	            in_array('Not generated', $error->tags, true)) {
    		buildlog("Description is too short: ".strlen($error->description)." for $file");
	    	++$warnings;
    	} 
    	
    	if ($error->description[-1] !== '.') {
	    	buildlog("Description is not finished by a dot for $file");
		    ++$warnings;
    	}

    	if (preg_match_all('/(mentionned|explicitely|parenthese|orginal|paramter)/', $error->description[-1], $r)) {
	    	buildlog("Description contains ".join(', ', $r[1])." in $file");
		    ++$warnings;
    	}
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
		buildlog("No array for tags in $file");
		++$warnings;
		continue;
	} else {
	    $error->tags = array_filter($error->tags);
	    if (empty($error->tags)) {
//    		buildlog("Tags is empty in $file");
//	    	++$warnings;
//	    	die("Tags is empty in $file");
	    }
	    
		foreach(array_filter($error->tags) as $tag) {
		    // @todo: get the actual name of the link
			$target = str_replace(array('errors/', '.ini'), '', $file);
			$target = addcslashes($target, '`\'');
			$name = str_replace('-', ' ', $target);
			$target = makeName($target);
			$tags[$tag][] = "[$name](messages/".escapeMd($target).".html)";
		}
		
		if (str_contains($error->error, 'syntax error') && !in_array('syntax-error', $error->tags)) {
    		buildlog("Missing syntax-error in $file");
    		++$warnings;
		}
		
		if (in_array('not-generated', $error->tags)) {
		    $error->description = "This error could not be reproduced so far. Help us by sending us any generating code.";
		}
	}

    if (in_array('_noDetails', $error->tags)) {
        // skip this
    } elseif (empty($error->code) && in_array('no-code', $error->tags)) {
	    // skip this
	} elseif (empty($error->code) && !in_array('not generated', $error->tags)) {
		buildlog("No code for $file");
		++$warnings;
	} elseif (!in_array('not generated', $error->tags) && 
          	  !in_array('no-opening-tag', $error->tags) && 
	           substr($error->code, 0, 5) !== '<?php') {
		buildlog("No opening tags in code for $file");
		++$warnings;
	} elseif (!in_array('no-closing-tag', $error->tags) && !in_array('not generated', $error->tags) && substr($error->code, -2) !== '?>') {
		buildlog("No closing tags in code for $file");
		++$warnings;
	}

	if (preg_match('/(trait|class|enum|interface|const|new|implements|extends|:|namespace) (?!(int|string|bool|void|never|float|callable|array|iterable|mixed|null|stdClass|class))[a-z]/', $error->code, $r) &&
	    !in_array('lower-case-name', $error->tags)) {
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
			$target = trim($target, '_`');
			$target = addcslashes($target, '`\'$');
			
			if (!file_exists("../analyzeG3/human/en/Features/$feature.ini")) {
				buildlog("No file feature known for $feature in ".addcslashes($file, '`\''));
				++$warnings;
			}

			$target = str_replace(array('errors/', '.ini'), '', $file);
			$target = addcslashes($target, '`\'');
			$name = str_replace('-', ' ', $target);
			$target = makeName($target);
			$features[$feature][] = "[$name](messages/".escapeMd($target).".html)";
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
			if (isset($nextprev[$error->previous . ' - ' . $target])) {
				unset($nextprev[$error->previous . ' - ' . $target]);
			} else {
				$nextprev[$error->previous . ' - ' . $target] = $target;
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
			if (isset($nextprev[$target . ' - ' . $error->next])) {
				unset($nextprev[$target . ' - ' . $error->next]);
			} else {
				$nextprev[$target . ' - ' . $error->next] = $target;
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
	        if ($analyze === 'none') { continue; }
	        
    	    if (!file_exists('../analyzeG3/human/en/'.$analyze.'.ini')) {
	    		buildlog($analyze." doesn't exist as an exakat rule in $file");
		    	++$warnings;
    	    } else {
    	        $rules[$analyze] ??= 0;
    	        $rules[$analyze]++;
    	    }
    	    $analyzers[] = $analyze;
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
		
		if (!in_array('_noDetails', $error->tags)) {
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
    
		    	if (substr($alternative, -1) !== '.' && substr($alternative, -1) !== ';') {
		    		buildlog("Alternative[$key] must finish with . in $file");
		    		++$warnings;
		    	}
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
//				die("No such related file as '$related' in $file");
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
	
	if ($error->level === "E_DEPRECATED") {
	    if (empty($error->changedBehavior[0])) {
			buildlog("Missing changedBehavior (deprecated) in $file");
			++$warnings;
	    }
	    
	    if (empty($error->analyzer[0])) {
			buildlog("Missing analyzer (deprecated) in $file");
			++$warnings;
	    }
	}
	
	if (in_array('syntax-error', $error->tags, true)) {
	    $link = $error->id;
	    $link = str_replace(['"', "'"], '', $link);
	    $link = makeName($link);
	    $link = escapeMD($link);
	    $syntaxErrors[] = '  + ['.escapeMd($error->error).'](messages/'.$link.'.html)';
	}
	$errors[$file] = $error;
	$titles[basename($file, '.ini')] = $error->error;

	$firstSentence = first_sentence($error->description);
	$nameUrl = makeName($name);
	$nameUrl = str_replace(' ', '-', $nameUrl);
	$llmsTxt[] = "[".$error->error."](https://php-errors.readthedocs.io/en/latest/messages/$nameUrl.html): ".$firstSentence;
}

if (!empty($reciproq)) {
	foreach($reciproq as $origin => $target) {
		[$o, $t] = explode(' - ', $origin);
		buildlog("$o lacks a related[] to $t");
		++$warnings;
	}
}

if (!empty($nextprev)) {
	foreach($nextprev as $origin => $target) {
		[$o, $t] = explode(' - ', $origin);
		buildlog("$o lacks a previous or next to $t");
		++$warnings;
	}
}


$errorlist = [];
$mdList = [];
$mdSummary = [
    '# Summary',
    '',
    '[Introduction](introduction.md)',
    '[Syntax Errors](syntaxerror.md)',
    '[Tags](tags.md)',
    '[Features](features.md)',
    '',
    '# Index',
    '+ [Index](messages-index.md)',
    
    ];

foreach($errors as $file => $message) {
	$entry = [];
	$mdEntry = [];

    $entry[] = ".. _".addcslashes($message->id, '$').":";
	$entry[] = '';
	
	$entry[] = trim($message->error, '`');
	$entry[] = str_repeat('-', strlen($message->error));
	$entry[] = ' ';
	$mdEntry[] = '# '.$message->error;
   	$mdEntry[] = '';

	$first = preg_split('/[\.\?;'.PHP_EOL.']/', $message->description)[0];

	$entry[] = '.. meta::';
	$entry[] = '	:description:';
	$entry[] = '		'.$message->error.': '.htmlspecialchars($first).'.';
	$entry[] = '	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png';
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
	$entry[] = '	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png';

	$entry[] = '';
	
	$entry[] = '.. raw:: html';
	$entry[] = '';
	$idSlug = makeUrlSafe(makeName(str_replace(["'", '"'], '', $message->id)));
	$ldjson = ['@context' => "https://schema.org",
	    '@graph' => [
	        ["@type" => "WebPage",
	        "@id" => "https://php-errors.readthedocs.io/en/latest/messages/".$idSlug.".html",
	        "url" => "https://php-errors.readthedocs.io/en/latest/messages/".$idSlug.".html",
	        "name" => $message->error,
	        "isPartOf" => [
	            "@id" =>  "https://www.exakat.io/"
	        ],
	        "datePublished" => $message->added,
	        "dateModified" => $message->modified,
	        "description" => $first,
	        "inLanguage" => 'en-US',
	        "potentialAction" => [
	            [
	            '@type' => 'ReadAction',
	            'target' => ["https://php-errors.readthedocs.io/en/latest/messages/".$idSlug.".html"]
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

	$mdEntry[] = '<script type="application/ld+json">'.json_encode($ldjson).'</script>';

	$mdEntry[] = '## Description';
	$mdEntry[] = str_replace('``', '`', $message->description);

	$entry[] = 'Example';
	$entry[] = str_repeat('_', strlen('Example'));
	$entry[] = '';
	$entry[] = '.. code-block:: php';
	$entry[] = '';
	$code = $message->code;
//	$code = '   '.str_replace("\n", "\n   ", $code);
	$entry[] = $code;
	$entry[] = '';

	$mdEntry[] = '';
	$mdEntry[] = '## Example';
//	$code = addcslashes($code, '?');
	$mdEntry[] = '';
	$mdEntry[] = '```php';
	$mdEntry[] = $code;
	$mdEntry[] = '```';
	$mdEntry[] = '';

    if (!empty($message->examples)) {
		$entry[] = '';
		
    	$entry[] = 'Literal Examples';
	    $entry[] = str_repeat('*', strlen('Example Examples'));
    	$mdEntry[] = '## Literal Examples';

		foreach($message->examples as $example) {
			$entry[] = '+ '.$example;
    	    $mdEntry[] = '+ '.$example;
		}
		$entry[] = '';
    	$mdEntry[] = '';
	}
	
	if (!empty($message->alternative)) {
		$entry[] = 'Solutions';
		$entry[] = str_repeat('_', strlen('Solutions'));
		$entry[] = '';
    	$mdEntry[] = '## Alternatives';
		
		foreach($message->alternative as $alternative) {
			$entry[] = '+ '.$alternative;
    	    $mdEntry[] = '+ '.$alternative;
		}
		$entry[] = '';
    	$mdEntry[] = '';
	}

	if (0 && !empty($message->related)) {
    	$mdEntry[] = '## Related messages';
		foreach($message->related as $related) {
    	    $mdEntry[] = '+ ['.trim($related, '_`').']('.escapeMd($related).'.html)';
		}
		$entry[] = '';
    	$mdEntry[] = '';
	}

	if (!empty($message->related)) {
		$entry[] = 'Related Error Messages';
		$entry[] = str_repeat('_', strlen('Related Error Messages'));
		$entry[] = '';

    	$mdEntry[] = '## Related error messages';
		
		foreach($message->related as $target) {
			$entry[] = '+ :ref:`'.trim($target, '_`').'`';

    	    $mdEntry[] = '+ ['.trim($target, '_`').']('.escapeMd($target).'.html)';
		}
		$entry[] = '';
    	$mdEntry[] = '';
	}

	if (!empty($message->seeAlso)) {
		$entry[] = 'See Also';
		$entry[] = str_repeat('_', strlen('See Also'));
		$entry[] = '';

    	$mdEntry[] = '## Related error messages';
		
		foreach($message->seeAlso as $name => $url) {
			$entry[] = '+ `'.$name.' <'.$url.'>`_';

    	    $mdEntry[] = '+ ['.$name.']('.$url.')';
		}
		$entry[] = '';
    	$mdEntry[] = '';
	}

	if (!empty($message->previous) && $message->previous !== 'no-previous-error') {
		$entry[] = '';
		$entry[] = "In previous PHP versions, this error message used to be :ref:`".trim($message->previous, '_`')."`.";
		$entry[] = '';

		$mdEntry[] = "In previous PHP versions, this error message used to be :ref:`".trim($message->previous, '_`')."`.";
	}

	if (!empty($message->next) && $message->next !== 'no-next-error') {
		$entry[] = '';
		$entry[] = "In more recent PHP versions, this error message is now :ref:`".trim($message->next, '_`')."`.";
		$entry[] = '';

		$mdEntry[] = "In more recent PHP versions, this error message is now :ref:`".trim($message->next, '_`')."`.";
	}

	if (isset($message->changedBehavior[0]) && ($message->changedBehavior[0] !== 'none')) {
		$entry[] = 'Changed Behavior';
		$entry[] = str_repeat('_', strlen('Changed Behavior'));
		$entry[] = '';

    	$mdEntry[] = '# Changed Behavior';

		$e = "This error may appear following an evolution in behavior, in previous versions. See ";
		$mdEntry[] = "This error may appear following an evolution in behavior, in previous versions. See ";

		if (!is_iterable($message->changedBehavior)) {
		    die("changedBehavior is not an array in $file\n");
		}
		$mdE = [];
		foreach($message->changedBehavior as $behavior) {
			$e .= "`".$behavior." <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/".$behavior.".html>`_, ";
			
    		$mdE[] = '['.$behavior.']('.$behavior.')';
			
		}
		$entry[] = trim($e, ', ').'.';
		$entry[] = '';
		
    	$mdEntry[] = implode(', ', $mdE);
	}

	if (isset($message->analyzer) && !empty($message->analyzer) && $message->analyzer[0] !== 'none') {
		$entry[] = 'Static Analysis';
		$entry[] = str_repeat('_', strlen('Static Analysis'));
		$entry[] = '';
		$e = "This error may be tracked down with the following static analysis rules: ";
		foreach($message->analyzer as $analyzer) {
			$e .= "`".$analyzer." <https://exakat.readthedocs.io/en/latest/Reference/Rules/".$analyzer.".html>`_, ";
		}
		$entry[] = trim($e, ', ').'.';
		$entry[] = '';
	}

	$name = $message->id;
	$content = implode(PHP_EOL, $entry);
	
	// quadruple `: this means a forgotten variable for INI $var
	if (str_contains($content, '````')) {
	    buildlog("Quadruple ```` in RST $name\n");
	}
    $name = str_replace(["'", '"'], '', $name);
	$name = makeName($name);
    file_put_contents('src/messages/'.$name.'.md', implode(PHP_EOL, $mdEntry));
//	print_r($mdEntry);die();
    
//    $urlName = str_replace('%', '%25', $name);
    $urlName = $name;
    $mdSummary[] = '  + ['.escapeMd($message->error).'](messages/'.addcslashes($urlName, '()[]`').'.md)';
	
	$slug = $message->id;
	$slug = str_replace(['"', "'"], '', $slug);
	$slug = makeName($slug);
	$slug = makeUrlSafe($slug);
	$sitemap->addItem('https://php-errors.readthedocs.io/en/latest/messages/'.$slug.'.html');
}

$changed = file_get_contents('message.rst.in');
$changed = str_replace('errorlist', implode(PHP_EOL, $errorlist), $changed);

file_put_contents('src/SUMMARY.md', implode(PHP_EOL, $mdSummary));

$tagsMd = array(
'## Tag index',
'',
);
ksort($tags);
foreach($tags as $tag => $refs) {
    if ($tag[0] === '_') { continue; }
	$tagsMd[] = '+ '.$tag;
	foreach($refs as $ref) {
		$tagsMd[] = '  + '.$ref.'';
	}
}

file_put_contents('src/tags.md', implode(PHP_EOL, $tagsMd));


$featuresMd = array(
'## Features index',
'',
);
ksort($features);
foreach($features as $feature => $refs) {
	$featuresMd[] = '+ '.$feature;
	foreach($refs as $ref) {
		$featuresMd[] = '  + '.$ref.'';
	}
}

file_put_contents('src/features.md', implode(PHP_EOL, $featuresMd));

ksort($syntaxErrors);
$syntaxErrors = [
'## Syntax errors',
'',
'Here is a list of classic syntax errors, met in every day code. Some common solutions are listed with them, so as to help anyone meeting them.',
'',
...$syntaxErrors,
];

file_put_contents('src/syntaxerror.md', implode(PHP_EOL, $syntaxErrors));


// Final summary
print "processed ".count($tags)." tags\n";
print "processed ".count($syntaxErrors)." syntax errors\n";
print "processed ".count($features)." features\n";
print "processed ".count($files)." files\n";
print "processed ".count($rules)." rules\n";
print "processed ".count($extensions)." extensions\n";
print "processed ".count($analyzers)." analyzers\n";
print "processed $links related\n";
print "warnings: $warnings\n";

$sitemap->write();
file_put_contents('./src/llms.txt', implode(PHP_EOL, $llmsTxt));

function check(stdClass $tip, string $file) : string {
	if (empty($tip->title)) {
		print "Empty title in $file\n";
	}

	return '';
}

function make_anchor(string $title) : string {
	$title = '`'.strtr(strtolower($title), ' ', '-').'`';
	$title = trim($title, '_`');
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

function escapeMd(string $message): string {
    $message = str_replace(['"', "'"], '', $message);
    return addcslashes($message, '_*`\\()[]');
}

function first_sentence(string $code): string {
    $id = min(strpos($code, '.'), strpos($code, ':') ?: 10000);
    
    return substr($code, 0, $id + 1);
}

function makeName(string $name): string {
	$name = str_replace(['%', '(', ')', '#'], ['p', 'q', 'r', 's'], $name);
    return $name;
}

// The on-disk filename (and mdBook's served path) keeps a literal '?' when the
// original message text contains one. That's fine for direct navigation, but
// a raw '?' inside a URL string (sitemap <loc>, JSON-LD @id/url) truncates the
// path there and turns everything after it into a query string, 404ing the
// real page. Percent-encode it wherever the slug is used to build a full URL.
// Commas, colons, semicolons, '=', '&', '$', '[', ']' are all safe unencoded
// in a path segment and must stay literal to match the real filename.
function makeUrlSafe(string $slug): string {
	return str_replace('?', '%3F', $slug);
}

// One git-log walk instead of two subprocess calls per file: builds
// [relative path => ['added' => ISO8601, 'modified' => ISO8601]] for
// every file git has ever tracked under $dir. 'added' is the author
// date of the oldest commit touching the file; 'modified' is the
// author date of the newest. Files git log never touched (new,
// uncommitted) are left out and the caller falls back to filemtime().
function buildGitDates(string $dir): array {
	$cmd = 'git log --format=%x01%aI --name-only --diff-filter=AM -- '
	     . escapeshellarg($dir) . ' 2>/dev/null';
	$output = shell_exec($cmd) ?? '';

	$dates = [];
	$currentDate = null;
	foreach (preg_split('/\R/', $output) as $line) {
		if ($line === '') {
			continue;
		}
		if ($line[0] === "\x01") {
			$currentDate = substr($line, 1);
			continue;
		}
		if ($currentDate === null) {
			continue;
		}
		if (!isset($dates[$line])) {
			$dates[$line] = ['modified' => $currentDate, 'added' => $currentDate];
		} else {
			// git log walks newest -> oldest, so the last date seen
			// for a file is its earliest (added) commit.
			$dates[$line]['added'] = $currentDate;
		}
	}
	return $dates;
}

?>