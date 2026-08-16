# Uninitialized string offset

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/uninitialized-string-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/uninitialized-string-offset.html","name":"Uninitialized string offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This error appears when using the array syntax on strings, while the requested index is too large, or too small","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/uninitialized-string-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when using the array syntax on strings, while the requested index is too large, or too small.

An offset is too big when it is beyond the length of the string. An offset is too small with it is below the length of the string, multiplied by -1. All values between `- strlen($string)` and `strlen($string)` are valid.

This error is displayed when the string offset is read. It becomes a `Illegal string offset` when the syntax is used to write a character.

## Example

```php
<?php

$string = 'abc';

//Uninitialized string offset
echo $string[-10];

//Uninitialized string offset that is too big
echo $string[5];

?>
```

## Literal Examples
+ Uninitialized string offset 1
+ Uninitialized string offset 5
+ Uninitialized string offset -5

## Alternatives
+ Check for the size of the string before using the offset.
+ Use substr(), which returns empty string for out of range offsets.

## Related error messages
+ [illegal-string-offset](illegal-string-offset.html)
