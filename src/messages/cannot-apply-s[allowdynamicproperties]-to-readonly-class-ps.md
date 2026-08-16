# Cannot apply #[AllowDynamicProperties] to readonly class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-readonly-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-readonly-class-%s.html","name":"Cannot apply #[AllowDynamicProperties] to readonly class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-17T20:04:31+02:00","dateModified":"2026-03-31T11:13:13+02:00","description":"Readonly classes are classes whose properties are set once, and never changed afterwards","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-readonly-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Readonly classes are classes whose properties are set once, and never changed afterwards. The readonly option may be added to the individual property, or globally, at the class level. 

Since PHP 8.1, dynamic properties are deprecated. A dynamic property is a property which is used at execution time, aka `$object->dynamic = 2;`, and has no explicit definition in the class block. Dynamic properties are created, yet they don't have any option, including the `readonly` option. In consequence, `#[AllowDynamicProperties]` and `readonly` at the class level are incompatible.`.

## Example

```php
<?php

#[AllowDynamicProperties]
readonly class X {
	private $property = 1;
}

?>
```

## Literal Examples
+ Cannot apply #[AllowDynamicProperties] to readonly class x

## Alternatives
+ Remove ``readonly`` from the class, and add it to all the properties in the class.
+ Create a ``readonly`` property with a another class which use the ``#[AllowDynamicProperties]`` attribute.
+ Create a ``readonly`` property with an array type, and use it to process the dynamic entries.
+ Remove the ``#[AllowDynamicProperties]`` attribute.
