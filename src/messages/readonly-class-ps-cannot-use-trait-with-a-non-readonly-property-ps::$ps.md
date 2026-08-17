# Readonly class %s cannot use trait with a non-readonly property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-class-ps-cannot-use-trait-with-a-non-readonly-property-ps::$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-class-ps-cannot-use-trait-with-a-non-readonly-property-ps::$ps.html","name":"Readonly class %s cannot use trait with a non-readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-15T22:48:05+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"When a class is readonly, then even the properties added to the class from a trait have to be readonly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-class-ps-cannot-use-trait-with-a-non-readonly-property-ps::$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a class is readonly, then even the properties added to the class from a trait have to be readonly. Since a trait cannot be readonly, like a class, then each of the properties in the trait, have to be readonly.

Also, note that PHP checks all the traits and the traits of the traits, for readonly properties.

## Example

```php
<?php

trait T {
	private $property;
}

readonly class X {
	use T;
}

?>
```

## Literal Examples
+ Readonly class x cannot use trait with a non-readonly property t::$a

## Alternatives
+ Remove the readonly on the class and apply to all each property in the class.
+ Make each of the property in the trait, and its dependencies, readonly.
