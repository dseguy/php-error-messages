# Readonly class %s cannot use trait with a non-readonly property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-class-%s-cannot-use-trait-with-a-non-readonly-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-class-%s-cannot-use-trait-with-a-non-readonly-property-%s::$%s.html","name":"Readonly class %s cannot use trait with a non-readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When a class is readonly, then even the properties added to the class from a trait have to be readonly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-class-%s-cannot-use-trait-with-a-non-readonly-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
