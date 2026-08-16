# Type %s contains both iterable and array, which is redundant

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-contains-both-iterable-and-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-contains-both-iterable-and-array.html","name":"Type %s contains both iterable and array, which is redundant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-contains-both-iterable-and-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 8.0 and the advent of union types, it is possible to write a type with duplicate type in it. This is obviously the case of the second function, in example.

It is less obvious to spot that `array` and `iterable` are redundant, yet, `iterable` = `array|Traversable`. So, `iterable` is sufficient, to also cover `array`.

This is a specific case of the general error that target any duplicate type in a definition.

## Example

```php
<?php

function foo() : array|iterable { }

function goo() : array|array { }

?>
```

## Literal Examples
+ Type iterable|array contains both iterable and array, which is redundant

## Alternatives
+ Remove the ``array`` type, and only use ``iterable`` for both.
+ Remove the ``iterable`` type, and only use ``array`` for this type.

## Related error messages
+ [duplicate-type-%s-is-redundant](duplicate-type-%s-is-redundant.html)
+ [type-%s-contains-both-object-and-a-class-type](type-%s-contains-both-object-and-a-class-type.html)

## Related error messages
+ [Iterables](https://www.php.net/manual/en/language.types.iterable.php)

In more recent PHP versions, this error message is now :ref:`duplicate-type-%s-is-redundant`.