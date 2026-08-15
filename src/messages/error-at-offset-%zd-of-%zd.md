# Error at offset %zd of %zd

## Description
Unserialize() reads a string, and parse it to produce a value: integer, string, array, object... It uses a specific format, and when there isn't enough information to successfully run the parse, this error message is emitted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/error-at-offset-%zd-of-%zd.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/error-at-offset-%zd-of-%zd.html","name":"Error at offset %zd of %zd","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Unserialize() reads a string, and parse it to produce a value: integer, string, array, object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/error-at-offset-%zd-of-%zd.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

unserialize("an invalid string");

?>
```

## Alternatives
+ Catch the returned value of the function: when it is null, an error occurred.

## Related error messages
+ [PHPserialize](https://www.phptutorial.net/php-oop/php-serialize/)
