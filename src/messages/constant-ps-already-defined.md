# Constant %s already defined

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s-already-defined.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s-already-defined.html","name":"Constant %s already defined","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-27T18:08:46+01:00","dateModified":"2026-08-06T15:27:15+02:00","description":"When a global constant is defined again, PHP reports a warning, and ignores the second definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s-already-defined.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a global constant is defined again, PHP reports a warning, and ignores the second definition.

This error applies to global constants only: class constants emit a fatal error, and a different message.

## Example

```php
<?php

const A = 1;
const A = 2;

echo A;

define('A', 3);
echo A;

?>
```

## Literal Examples
+ Constant A already defined

## Alternatives
+ Remove the second definition.
+ Remove the first definition.
+ Fix the name of one of the constants.
+ Check if there are no missing namespace.

## Related error messages
+ [cannot-redefine-class-constant](cannot-redefine-class-constant.html)
+ [cannot-redeclare-constant-'%s'](cannot-redeclare-constant-%s.html)
