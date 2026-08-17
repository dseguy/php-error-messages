# %s class %s cannot extend %s class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-class-ps-cannot-extend-ps-class-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-class-ps-cannot-extend-ps-class-ps.html","name":"%s class %s cannot extend %s class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-04T21:25:09+02:00","dateModified":"2026-08-04T21:25:09+02:00","description":"This is the generic form of the error emitted when a ``readonly`` class and a non-``readonly`` class try to extend one another: the first two ``%s`` are ``Readonly``\/``Non-readonly`` plus the child class name, the last two are ``readonly``\/``non-readonly`` plus the parent class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-class-ps-cannot-extend-ps-class-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is the generic form of the error emitted when a `readonly` class and a non-`readonly` class try to extend one another: the first two `%s` are `Readonly`/`Non-readonly` plus the child class name, the last two are `readonly`/`non-readonly` plus the parent class name.

`readonly` is a class-wide modifier: it applies to every property declared in the class. Because a subclass inherits all of its parent's properties, mixing a `readonly` class with a non-`readonly` one in the same hierarchy would leave some properties ambiguous about whether they can be written to after construction. PHP forbids this by requiring every class in an inheritance chain to share the same `readonly` status.

## Example

```php
<?php

readonly class Foo
{
}

class Bar extends Foo
{
}

?>
```

## Literal Examples
+ Readonly class Bar cannot extend non-readonly class Foo
+ Non-readonly class Bar cannot extend readonly class Foo

## Alternatives
+ Make both classes readonly.
+ Make both classes non-readonly.
+ Make both classes non-readonly and apply readonly per property instead.

## Related error messages
+ [readonly-class-%s-cannot-extend-non-readonly-class-%s](readonly-class-%s-cannot-extend-non-readonly-class-%s.html)
+ [non-readonly-class-%s-cannot-extend-readonly-class-%s](non-readonly-class-%s-cannot-extend-readonly-class-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()