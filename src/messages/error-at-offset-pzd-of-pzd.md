# Error at offset %zd of %zd

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/error-at-offset-pzd-of-pzd.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/error-at-offset-pzd-of-pzd.html","name":"Error at offset %zd of %zd","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-20T12:08:21+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Unserialize() reads a string, and parse it to produce a value: integer, string, array, object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/error-at-offset-pzd-of-pzd.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Unserialize() reads a string, and parse it to produce a value: integer, string, array, object... It uses a specific format, and when there isn't enough information to successfully run the parse, this error message is emitted.

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
