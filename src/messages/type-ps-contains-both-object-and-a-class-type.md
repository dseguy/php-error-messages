# Type %s contains both object and a class type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-contains-both-object-and-a-class-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-contains-both-object-and-a-class-type.html","name":"Type %s contains both object and a class type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-28T08:09:58+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"The ``object`` type already matches an instance of any class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-contains-both-object-and-a-class-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `object` type already matches an instance of any class. Adding a specific class name next to it in a union type, such as `object|Test`, does not widen what is accepted: every value that matches `Test` already matches `object`. PHP detects this redundancy purely from the type names, without needing `Test` to be defined or loaded.

The full message reads: `Type %s contains both object and a class type, which is redundant`.

## Example

```php
<?php

function test(): object|Test {
}

?>
```

## Literal Examples
+ Type Test|object contains both object and a class type, which is redundant

## Alternatives
+ Remove the specific class name, and keep only ``object``.
+ Remove ``object``, and keep only the specific class name, if that narrower type is what is actually intended.

## Related error messages
+ [type-%s-contains-both-iterable-and-array](type-%s-contains-both-iterable-and-array.html)
+ [type-contains-both-true-and-false,-bool-must-be-used-instead](type-contains-both-true-and-false,-bool-must-be-used-instead.html)
+ [duplicate-type-%s-is-redundant](duplicate-type-%s-is-redundant.html)
+ [type-%s-cannot-be-part-of-an-intersection-type](type-%s-cannot-be-part-of-an-intersection-type.html)
+ [type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s](type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()