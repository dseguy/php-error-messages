# Property %s::$%s cannot have type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-%s::$%s-cannot-have-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-%s::$%s-cannot-have-type-%s.html","name":"Property %s::$%s cannot have type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-07-30T22:30:52+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"Some native PHP types are not allowed with a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-%s::$%s-cannot-have-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Some native PHP types are not allowed with a property. This is the case of void, never and callable. Any mention of them, alone or in a compsed type generates this error.

## Example

```php
<?php

class X {
	public callable|int $property = 1;
}

?>
```

## Literal Examples
+ Property x::$p cannot have type callable

## Alternatives
+ Remove any illegal type from the definition of the property.
+ Remove all types from the definition of the property.

## Related error messages
+ [class-constant-%s::%s-cannot-have-type-%s](class-constant-%s::%s-cannot-have-type-%s.html)
+ [default-value-for-property-of-type-%s-may-not-be-null.-use-the-nullable-type-%s-to-allow-null-default-value](default-value-for-property-of-type-%s-may-not-be-null.-use-the-nullable-type-%s-to-allow-null-default-value.html)
