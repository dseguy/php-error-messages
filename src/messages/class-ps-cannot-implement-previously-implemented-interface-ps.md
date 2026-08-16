# Class %s cannot implement previously implemented interface %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-implement-previously-implemented-interface-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-implement-previously-implemented-interface-%s.html","name":"Class %s cannot implement previously implemented interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-17T20:04:31+02:00","dateModified":"2025-05-06T07:21:26+02:00","description":"It is not allowed to use several times the same interface in a ``implements`` clause, for classes, or ``extends`` for interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-implement-previously-implemented-interface-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not allowed to use several times the same interface in a `implements` clause, for classes, or `extends` for interfaces.

The message is a bit confusing, since the interface is not already implemented, but rather, used in the implements clause. In fact, PHP checks first the list of names of the clause, then it checks the signatures of the methods.

This error message is dependent on the `use` expresion, and also the calls to `class_alias()`.

## Example

```php
<?php

use I as J;

interface I {}

// Multiple ways to reference an interface
class Foo implements I, \I, J {}

// This applies to interfaces too
interface Bar extends I, \I, J {}

?>
```

## Literal Examples
+ Class foo cannot implement previously implemented interface i

## Alternatives
+ Remove the duplicate interface name.
