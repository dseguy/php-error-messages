# Accessing static trait property %s::$%s is deprecated, it should only be accessed on a class using the trait

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/accessing-static-trait-property-%s::$%s-is-deprecated,-it-should-only-be-accessed-on-a-class-using-the-trait.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/accessing-static-trait-property-%s::$%s-is-deprecated,-it-should-only-be-accessed-on-a-class-using-the-trait.html","name":"Accessing static trait property %s::$%s is deprecated, it should only be accessed on a class using the trait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-17T20:04:31+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Traits should not be used as standalone structure, but rather as a part of a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/accessing-static-trait-property-%s::$%s-is-deprecated,-it-should-only-be-accessed-on-a-class-using-the-trait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Traits should not be used as standalone structure, but rather as a part of a class. Even for class agnostic structures, such as constants or static properties, they should be accessed via any class that uses them.

## Example

```php
<?php

trait T {
	public static $property = 1;
}

echo T::$property;
T::$property = 2;

?>
```

## Literal Examples
+ Accessing static trait property T::$property is deprecated, it should only be accessed on a class using the trait

## Alternatives
+ Find a class that use the trait, and then, access the static property from there.
+ Create a class that only use the trait, and use it. An anonymous class would do.
+ Turn the trait into a class.

## Related error messages
+ [cannot-access-trait-constant-%s::%s-directly](cannot-access-trait-constant-%s::%s-directly.html)
