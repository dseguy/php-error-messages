# syntax error, unexpected '[', expecting ';' or ','

## Description
Using the array syntax directly on an interpolated string was not possible until PHP 8.0. Until then, it reported a syntax error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'[',-expecting-';'-or-','.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'[',-expecting-';'-or-','.html","name":"syntax error, unexpected '[', expecting ';' or ','","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Using the array syntax directly on an interpolated string was not possible until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'[',-expecting-';'-or-','.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$a = 'foo';
echo bar$a[4]; // display f

?>
```

## Alternatives
+ Upgrade to PHP 8.0 or more.
+ Put the string in a variable first.

## Related error messages
+ [syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-','](syntax-error,-unexpected-::-\(t\_paamayim\_nekudotayim\),-expecting-;-or-,.html)
