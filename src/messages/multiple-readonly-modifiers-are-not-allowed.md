# Multiple readonly modifiers are not allowed

## Description
Only one readonly option is necessary to make a property read-only. Two is overkill, and not needed, so PHP reports it.

There are similar messages for multiple visibility, or multiple static.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-readonly-modifiers-are-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-readonly-modifiers-are-not-allowed.html","name":"Multiple readonly modifiers are not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 17:21:07 +0000","dateModified":"Wed, 15 Jul 2026 17:21:07 +0000","description":"Only one readonly option is necessary to make a property read-only","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-readonly-modifiers-are-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
	private readonly readonly A $b;
}

readonly readonly class Y {
}

?>
```

## Alternatives
+ Drop the extra readonly, and keep only one.
+ Drop all the readonly options.

## Related error messages
+ [multiple-static-modifiers-are-not-allowed](asdf)
+ [multiple-access-type-modifiers-are-not-allowed](asdf)
+ [multiple-%s-modifiers-are-not-allowed](asdf)
