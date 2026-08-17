# syntax error, unexpected '|', expecting variable (T_VARIABLE)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-|,-expecting-variable-qt_variabler.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-|,-expecting-variable-qt_variabler.html","name":"syntax error, unexpected '|', expecting variable (T_VARIABLE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-31T11:06:43+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Union types were introduced in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-|,-expecting-variable-qt_variabler.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Union types were introduced in PHP 8.0: union type allows the specification of several distinct types, separated by a `|` pipe character. Until PHP 8.0, types were immediately followed by the variable or property name.

## Example

```php
<?php

class X {
    private int|float $property;
}

function foo(int|float $property) {}


?>
```

## Alternatives
+ Upgrade to PHP 8.0.
+ Find a common supertype to the two (or more) involved types.
+ Remove all types.
