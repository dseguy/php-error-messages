# Offset not contained in string.

## Description
strpos() searches for a string called `$needle` in another string called `$haystack`, starting at the offset passed as third argument, and called `$offset`. 

The offset must be smaller than the full length of the `$haystack`: otherwise, PHP starts to search beyond the end of the data, and that will always fail. 

This error message is shared by several PHP native and extension functions, namely `mbstring` and `iconv`: `strpos()`, `strrpos()`, `stripos()`, `strripos()`, `mb_strpos()`, `mb_strrpos()`, `mb_stripos()`, `mb_strripos()`, `iconv_strpos` and `iconv_strrpos`. 

Before PHP 8.0, the failure was reported as a non-blocking warning. Since PHP 8.0, it is a fatal error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/offset-not-contained-in-string..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/offset-not-contained-in-string..html","name":"Offset not contained in string.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/offset-not-contained-in-string..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

var_dump(strpos('abc', 'a', 4));

?>
```

## Alternatives
+ Check that the offset is not beyond the length of the string.
+ Use a try catch around this methodcall.
+ Lengthen the source string.

In more recent PHP versions, this error message is now :ref:`must-be-contained-in-argument-#1-($haystack)`.