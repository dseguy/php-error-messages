# Cannot use the static modifier on a property hook

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-static-modifier-on-a-property-hook.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-static-modifier-on-a-property-hook.html","name":"Cannot use the static modifier on a property hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-04-10T22:59:39+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"It is not possible to make individual property hooks static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-static-modifier-on-a-property-hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to make individual property hooks static. The keyword must be set at the property definition level, for all the hooks.

## Example

```php
<?php

class X {
	public $property {
		static get;
	}
}

?>
```

## Alternatives
+ Remove the abstract keyword, and put it on the property definition level.

## Related error messages
+ [cannot-create-closure-for-parent-property-hook-call](cannot-create-closure-for-parent-property-hook-call.html)
