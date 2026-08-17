# Duplicate type %s is redundant

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-type-ps-is-redundant.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-type-ps-is-redundant.html","name":"Duplicate type %s is redundant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-08T20:13:01+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"When declaring a complex type, each part of the type must be unique","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-type-ps-is-redundant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When declaring a complex type, each part of the type must be unique. This means that a type can only be mentioned once.

This constraint is actually easier to explain than to detail: of course, it is important to avoid repeating the same type, yet types may be declared with different case, with or without initial slash, with a local alias, or also with a class_alias(). 

Then, there is also the possiblity for the type to be part of a composed type, such as bool (which is true|false), or mixed, or iterable, etc. 

Only the first redundant type is reported.

## Example

```php
<?php

function foo() : A|a|\a|\A {}

function goo() : bool|false {}

?>
```

## Literal Examples
+ Duplicate type a is redundant
+ Duplicate type false is redundant

## Alternatives
+ Remove types that are double.
+ Remove the types.

## Related error messages
+ [type-contains-both-true-and-false,-bool-must-be-used-instead](type-contains-both-true-and-false,-bool-must-be-used-instead.html)
+ [type-%s-contains-both-iterable-and-array](type-%s-contains-both-iterable-and-array.html)
+ [type-%s-contains-both-object-and-a-class-type](type-%s-contains-both-object-and-a-class-type.html)
+ [type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s](type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s.html)
+ [null-cannot-be-marked-as-nullable](null-cannot-be-marked-as-nullable.html)
+ [type-%s-cannot-be-part-of-an-intersection-type](type-%s-cannot-be-part-of-an-intersection-type.html)
+ [type-%s-is-redundant-with-type-%s](type-%s-is-redundant-with-type-%s.html)

In previous PHP versions, this error message used to be :ref:`type-%s-contains-both-iterable-and-array`.