# Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead

## Description
Until PHP 8.4, it is possible to use a default value of null, on a parameter that is not nullable. This special situation makes the parameter nullable: it may be omitted, or explicitly passed as null. This is a hidden type, as the null type is not explicit, yet it is fully usable.

In PHP 8.4, this is not possible anymore. For consistency reasons, the type must be explicitly displayed. Until then, it was silent.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html","name":"Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[implicitNullable](implicitNullable)