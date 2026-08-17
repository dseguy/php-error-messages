# syntax error, unexpected token "::"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-::.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-::.html","name":"syntax error, unexpected token \"::\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-::.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In this situation, the keyword `or` is reserved by PHP and cannot be used as a class name, a function name, or a global constant. 

By extension, the `or` keyword cannot be used in static object notations, such as calling a constant, or a static method or property.

This error may arise with other keywords, such as `switch`, `and`, `foreach`, etc, for similar reasons. It also may happen when a new keyword is reserved by PHP, between two versions.

The error also appears when the left operand of the `::` is missing, or not applicable. Here, there is an illustration with `echo`.

## Example

```php
<?php

// double-colon on an operator
1 or::A;

echo ::class;

// double-colon on a number
1::class;

?>
```

## Alternatives
+ Rename the class with a PHP non-keyword.

## Related error messages
+ [syntax-error,-unexpected-'::',-expecting-'('](syntax-error,-unexpected-::,-expecting-\(.html)
