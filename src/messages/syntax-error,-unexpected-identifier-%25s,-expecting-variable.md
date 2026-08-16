# syntax error, unexpected identifier "%s", expecting variable

## Description
A foreach() structure requires a variable after the `as` keyword: in fact, it may be a variable, a property, a static property, an array index or the `list()` expression.

The same error also appears when the intersectional type syntax is used: While `A&` is valid PHP 8.0, it should be followed by a variable (a parameter), and it finds another type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable.html","name":"syntax error, unexpected identifier \"%s\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

foreach($a as b) {}

function foo(A&B $arg) {}

?>
```

## Literal Examples
+ syntax error, unexpected identifier "B", expecting variable
+ syntax error, unexpected identifier "b", expecting variable
+ syntax error, unexpected identifier "Countable", expecting variable

## Alternatives
+ Add the missing ``$`` sign, to make the identifier an array.
+ Upgrade to PHP 8.2, with intersectional types.
+ Remove the intersectional types.
