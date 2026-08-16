# Cannot access trait constant %s::%s directly

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-trait-constant-%s::%s-directly.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-trait-constant-%s::%s-directly.html","name":"Cannot access trait constant %s::%s directly","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-09T20:18:45+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Traits cannot be used indepently from a host class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-trait-constant-%s::%s-directly.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Traits cannot be used indepently from a host class. They must be used inside a class, with the `use` keyword. 

It is also not possible to call a method or a property on a trait.

Trait constants were introduced after direct access to trait features was banned, so there was no time where accessing a trait constant was possible, unlike trait properties or methods.

## Example

```php
<?php

trait T {
	public static const C = 1;
}

echo T::C;

?>
```

## Literal Examples
+ Cannot access trait constant T::C directly

## Alternatives
+ Use the trait in a class and access its features.
+ Convert the trait into a class and access its features.

## Related error messages
+ [accessing-static-trait-property-%s::$%s-is-deprecated](accessing-static-trait-property-%s::$%s-is-deprecated.html)
+ [calling-static-trait-method-%s::%s-is-deprecated](calling-static-trait-method-%s::%s-is-deprecated.html)
+ [traits-cannot-have-constants](traits-cannot-have-constants.html)
+ [accessing-static-trait-property-%s::$%s-is-deprecated,-it-should-only-be-accessed-on-a-class-using-the-trait](accessing-static-trait-property-%s::$%s-is-deprecated,-it-should-only-be-accessed-on-a-class-using-the-trait.html)

In previous PHP versions, this error message used to be :ref:`traits-cannot-have-constants`.