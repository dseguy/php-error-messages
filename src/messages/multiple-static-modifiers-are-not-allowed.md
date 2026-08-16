# Multiple static modifiers are not allowed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-static-modifiers-are-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-static-modifiers-are-not-allowed.html","name":"Multiple static modifiers are not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-06-02T21:27:50+02:00","dateModified":"2026-07-17T22:59:23+02:00","description":"Only one static option is necessary to make a property static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-static-modifiers-are-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Only one static option is necessary to make a property static. Two is overkill, and not needed, so PHP reports it.

There are similar messages for multiple readonly, or multiple static.

Multiple static on a closure or arrow function leads to a parse error.

## Example

```php
<?php

class X {
	private static static A $b;

	private static static function a() {}
}

static static function () {}; 

?>
```

## Alternatives
+ Drop the extra static, and keep only one.
+ Drop all the static options.

## Related error messages
+ [multiple-readonly-modifiers-are-not-allowed](multiple-readonly-modifiers-are-not-allowed.html)
+ [multiple-access-type-modifiers-are-not-allowed](multiple-access-type-modifiers-are-not-allowed.html)
+ [multiple-%s-modifiers-are-not-allowed](multiple-%s-modifiers-are-not-allowed.html)
