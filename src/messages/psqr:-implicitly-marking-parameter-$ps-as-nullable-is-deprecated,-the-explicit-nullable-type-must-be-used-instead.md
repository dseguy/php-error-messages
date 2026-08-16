# Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html","name":"Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-27T10:37:46+01:00","dateModified":"2026-03-31T11:06:56+02:00","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Until PHP 8.4, it is possible to use a default value of null, on a parameter that is not nullable. This special situation makes the parameter nullable: it may be omitted, or explicitly passed as null. This is a hidden type, as the null type is not explicit, yet it is fully usable.

In PHP 8.4, this is not possible anymore. For consistency reasons, the type must be explicitly displayed. Until then, it was silent.

## Example

```php
<?php

function foo(string $s = null) {}

class X {
    function foo(string $s = null) {}
}

?>
```

## Literal Examples
+ foo(): Implicitly marking parameter $s as nullable is deprecated, the explicit nullable type must be used instead
+ X::bar(): Implicitly marking parameter $s as nullable is deprecated, the explicit nullable type must be used instead

## Alternatives
+ Add ``?`` to the type.
+ Add ``null|`` to the type.
+ Use a default value in the range of the specified type.

## Related error messages
+ [default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value](default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[implicitNullable](implicitNullable)