# the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$escape-parameter-must-be-provided,-as-its-default-value-will-change,-either-explicitly-or-via-splfileobject::setcsvcontrolqr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$escape-parameter-must-be-provided,-as-its-default-value-will-change,-either-explicitly-or-via-splfileobject::setcsvcontrolqr.html","name":"the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T09:11:08+02:00","dateModified":"2026-09-24T09:11:08+02:00","description":"``SplFileObject::fgetcsv()`` and ``SplFileObject::fputcsv()`` take an ``$escape`` character used to escape the enclosure character inside CSV fields, currently defaulting to ``\\`` (backslash) -- a default that PHP 9","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$escape-parameter-must-be-provided,-as-its-default-value-will-change,-either-explicitly-or-via-splfileobject::setcsvcontrolqr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`SplFileObject::fgetcsv()` and `SplFileObject::fputcsv()` take an `$escape` character used to escape the enclosure character inside CSV fields, currently defaulting to `\` (backslash) -- a default that PHP 9.0 will change to an empty string, disabling escaping entirely by default, to better match RFC 4180 and other CSV parsers.

As of PHP 8.4, calling `fgetcsv()`/`fputcsv()` on a `SplFileObject` without an explicit `$escape` -- and without having set one explicitly via `SplFileObject::setCsvControl()` either -- emits this deprecation notice, so the pending default change does not silently alter behaviour later.

## Example

```php
<?php

file_put_contents('/tmp/data.csv', "a,b,c\n");

$file = new SplFileObject('/tmp/data.csv');
$file->setFlags(SplFileObject::READ_CSV);

// No $escape argument, and setCsvControl() was never called to set
// one explicitly either, so the (soon to change) default is used.
var_dump($file->fgetcsv());

?>
```

## Literal Examples
+ SplFileObject::fgetcsv(): the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl()

## Alternatives
+ Pass $escape explicitly on every fgetcsv()/fputcsv() call, e.g. $file->fgetcsv(',', '"', '\\').
+ Call SplFileObject::setCsvControl() once with the escape character, so every later fgetcsv()/fputcsv() call already has it set.
+ Decide now whether the code needs backslash-escaping (pass '\\') or the future default (pass '') and stop depending on the implicit default either way.

## Related error messages
+ [the-$escape-parameter-must-be-provided-as-its-default-value-will-change](the-$escape-parameter-must-be-provided-as-its-default-value-will-change.html)

## Related error messages
+ [PHP.Watch: CSV functions $escape parameter](https://php.watch/versions/8.4/csv-functions-escape-parameter)
+ [SplFileObject::setCsvControl manual](https://www.php.net/manual/en/splfileobject.setcsvcontrol.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[fputcsvEscape](fputcsvEscape)