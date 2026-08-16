# Type %s cannot be part of an intersection type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-cannot-be-part-of-an-intersection-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-cannot-be-part-of-an-intersection-type.html","name":"Type %s cannot be part of an intersection type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:35 +0000","dateModified":"Mon, 27 Jul 2026 16:18:35 +0000","description":"An intersection type, like ``string&Iterator``, requires a value to be an instance of every listed type at once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-cannot-be-part-of-an-intersection-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An intersection type, like `string&Iterator`, requires a value to be an instance of every listed type at once. That is only meaningful for class and interface names: a value can implement several interfaces simultaneously.

Scalar and compound pseudo-types (`int`, `float`, `string`, `bool`, `array`, `callable`, `iterable`, `mixed`, `void`, `never`, `null`, `false`, `true`), as well as `self`, `parent` and `static`, cannot be combined into an intersection, since nothing can be, for instance, a `string` and an object implementing `Iterator` at the same time.

## Example

```php
<?php

function foo(): string&Iterator {}

?>
```

## Literal Examples
+ Type string cannot be part of an intersection type

## Alternatives
+ Remove the scalar or pseudo-type from the intersection, and keep only class or interface names.
+ Use a union type (``|``) instead, if any of the alternatives is acceptable.

## Related error messages
+ [type-%s-contains-both-object-and-a-class-type](type-%s-contains-both-object-and-a-class-type.html)
+ [duplicate-type-%s-is-redundant](duplicate-type-%s-is-redundant.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()