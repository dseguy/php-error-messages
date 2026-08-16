# syntax error, unexpected '|', expecting variable (T_VARIABLE)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'|',-expecting-variable-(t_variable).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'|',-expecting-variable-(t_variable).html","name":"syntax error, unexpected '|', expecting variable (T_VARIABLE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Union types were introduced in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'|',-expecting-variable-(t_variable).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
