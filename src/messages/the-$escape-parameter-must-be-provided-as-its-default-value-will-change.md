# the $escape parameter must be provided as its default value will change

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$escape-parameter-must-be-provided-as-its-default-value-will-change.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$escape-parameter-must-be-provided-as-its-default-value-will-change.html","name":"the $escape parameter must be provided as its default value will change","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The ``$escape`` parameter of various PHP functions that deal with CSV files will change in PHP 9","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$escape-parameter-must-be-provided-as-its-default-value-will-change.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `$escape` parameter of various PHP functions that deal with CSV files will change in PHP 9.0. The current default value is `\` (backslash), and it will be changed to an empty string. To be ready for that version, it is recommended to explicitly set that value, so as to preserve the previous behavior, with a `\`, or move to the new one, with an empty string.

## Example

```php
<?php

$fp = fopen(export.csv, w);
fputcsv($data);

?>
```

## Alternatives
+ Add the 5th parameter in the fputcsv() or fgetcsv() calls.
+ Add the named parameter ``escape`` in the calls.
+ Test your application with ``escape`` set to empty string, and PHP 8.4+.

## Related error messages
+ [Theescapeparametermustbeprovided](https://php.watch/versions/8.4/csv-functions-escape-parameter)
+ [fputcsvandescapecharacter](https://externals.io/message/100729)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[fputcsvEscape](fputcsvEscape)