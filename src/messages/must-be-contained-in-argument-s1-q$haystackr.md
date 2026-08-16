# %s(): Argument #%d ($%s) must be contained in argument #%d ($%s)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-contained-in-argument-#1-($haystack).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-contained-in-argument-#1-($haystack).html","name":"%s(): Argument #%d ($%s) must be contained in argument #%d ($%s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-10T17:57:06+01:00","dateModified":"2025-10-19T12:33:32+02:00","description":"strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-contained-in-argument-#1-($haystack).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
strpos() searches for a string called `$needle` in another string called `$haystack`, starting at the offset passed as third argument, and called `$offset`. 

The offset must be smaller than the full length of the `$haystack`: otherwise, PHP starts to search beyond the end of the data, and that will always fail. 

This error message is shared by several PHP native and extension functions, namely `mbstring` and `iconv`: `strpos()`, `strrpos()`, `stripos()`, `strripos()`, `mb_strpos()`, `mb_strrpos()`, `mb_stripos()`, `mb_strripos()`, `iconv_strpos` and `iconv_strrpos`. 

Before PHP 8.0, the failure was reported as a non-blocking warning. Since PHP 8.0, it is a fatal error.

## Example

```php
<?php

var_dump(strpos('abc', 'a', 4));

?>
```

## Literal Examples
+ strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack)

## Alternatives
+ Check that the offset is not beyond the length of the string.
+ Use a try catch around this methodcall.
+ Lengthen the source string.

In previous PHP versions, this error message used to be :ref:`offset-not-contained-in-string.`.