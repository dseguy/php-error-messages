# Cannot use the abstract modifier on a property hook

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-abstract-modifier-on-a-property-hook.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-abstract-modifier-on-a-property-hook.html","name":"Cannot use the abstract modifier on a property hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-30T22:07:36+02:00","dateModified":"2025-11-18T06:36:11+01:00","description":"It is not possible to make individual property hooks abstract","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-abstract-modifier-on-a-property-hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to make individual property hooks abstract. The keyword must be set at the property definition level, for all the hooks.

## Example

```php
<?php

abstract class X {
	public $property {
		abstract get;
	}
}

?>
```

## Alternatives
+ Remove the abstract keyword, and put it on the property definition level.

## Related error messages
+ [property-hook-cannot-be-both-abstract-and-final](property-hook-cannot-be-both-abstract-and-final.html)
