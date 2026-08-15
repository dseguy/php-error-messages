# Accessing static trait property %s::$%s is deprecated

## Description
Traits cannot be used independently from a host class. They must be used inside a class, with the `use` keyword. 

Until PHP 8.1, it was possible to call traits without a host class. Since 8.1, writing or reading properties in a trait is forbidden.

It is also not possible to call a method or a constant on a trait.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/accessing-static-trait-property-%s::$%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/accessing-static-trait-property-%s::$%s-is-deprecated.html","name":"Accessing static trait property %s::$%s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"Traits cannot be used independently from a host class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/accessing-static-trait-property-%s::$%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

trait T {
	public static $t = 1;
}

echo T::$t;

T::$t = 2;

?>
```

## Literal Examples
+ Accessing static trait property T::$property is deprecated

## Alternatives
+ Use the trait in a class and access its features.
+ Convert the trait into a class and access its features.

## Related error messages
+ [calling-static-trait-method-%s::%s-is-deprecated](calling-static-trait-method-%s::%s-is-deprecated.html)
+ [cannot-access-trait-constant-%s::%s-directly](cannot-access-trait-constant-%s::%s-directly.html)
