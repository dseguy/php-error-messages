# Illegal offset type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-offset-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-offset-type.html","name":"Illegal offset type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-08T08:57:25+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"PHP only uses integers and strings as array index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-offset-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP only uses integers and strings as array index. While certain other types may be converted silently to those types, as `null` or `boolean`, objects and arrays yield an illegal type for index.

This error is reported at compile time when PHP can detect the type then, otherwise, it is reported at execution time.

## Example

```php
<?php

$a = new Stdclass;

$array = [$a => 2];

$array[$a] = 1;

$array[$array] = 3;

?>
```

## Alternatives
+ Convert these types into a string or a integer first.
+ Cast these types into a string or a integer first.

## Related error messages
+ [cannot-access-offset-of-type-%s-in-isset-or-empty](cannot-access-offset-of-type-%s-in-isset-or-empty.html)
+ [cannot-access-offset-of-type-%s-on-%s](cannot-access-offset-of-type-%s-on-%s.html)
+ [illegal-offset-type-in-unset](illegal-offset-type-in-unset.html)
+ [illegal-offset-type-in-isset-or-empty](illegal-offset-type-in-isset-or-empty.html)
