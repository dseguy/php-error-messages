# Only arrays and Traversables can be unpacked

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-arrays-and-traversables-can-be-unpacked.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-arrays-and-traversables-can-be-unpacked.html","name":"Only arrays and Traversables can be unpacked","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-04-11T19:46:35+02:00","dateModified":"2025-09-14T18:09:14+02:00","description":"The triple dot ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-arrays-and-traversables-can-be-unpacked.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The triple dot `...` operator works on arrays and traversables, such as `generator`, `iterators`... It cannot work on other data structures.

Also, `...` has a lower priority than the null-coalesce operator `??`, so it applies to both branch of the operator.

## Example

```php
<?php

$a = null;
foo(...$a);

foo(...$a ?? range(1,2));
// displays 1, 2

function foo() {
    print_r(func_get_args());
}

?>
```

## Alternatives
+ Check that the value is an array or a traverable before using the ``...`` operator.
+ Use the ``??`` operator to give a value to ``null`` before the ``...`` operator.
+ Use the ``?:`` operator to give a value to empty data before the ``...`` operator.

## Related error messages
+ [only-arrays-can-be-unpacked-in-constant-expression](only-arrays-can-be-unpacked-in-constant-expression.html)
