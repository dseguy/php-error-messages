<?php

include 'vendor/autoload.php';

$file = $argv[1] ?? 'errors/call-to-%s-%s::%s()-from-invalid.ini';

if (!file_exists($file)) {
    die("'$file' does not exists. Aborting.\n");
}

print "cleaning $file\n";
$reader = new Matomo\Ini\IniReader();

$array = $reader->readFile($file);
$entries = ['analyzer' => [''],
            ];
foreach($entries as $entry => $default) {
    if (!isset($array[$entry])) {
        print "Adding missing $entry\n";
        $array[$entry] = $default;
        continue;
    }
}

$validations = [
    'description' => validateDescription(...),
    'tags'        => validateTags(...),
    'code'        => validateCode(...),
];

foreach($validations as $entry => $validation) {
    $array[$entry] = $validation($array[$entry]);
}

print_r($array);
//$file = 'test.ini';
print "Writing to $file\n";

$writer = new Matomo\Ini\IniWriter();
$writer->writeToFile($file, [$array]);

$ini = file_get_contents($file);
$ini = trim(substr($ini, 4));
file_put_contents($file, $ini);

function validateDescription(string $description): string {
    return trim($description, "\n .").'.';
}

function validateCode(string $code): string {
    return trim($code, "\n ");
}

function validateTags(array $tags): array {
    $return = array_unique(array_filter($tags));
    
    return $return ?: [''];
}

?>