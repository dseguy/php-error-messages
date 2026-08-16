# Multiple access type modifiers are not allowed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-access-type-modifiers-are-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-access-type-modifiers-are-not-allowed.html","name":"Multiple access type modifiers are not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 17:21:07 +0000","dateModified":"Wed, 15 Jul 2026 17:21:07 +0000","description":"Only one visibility option is necessary to set the visibility of a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-access-type-modifiers-are-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Only one visibility option is necessary to set the visibility of a property. Two is overkill or could be impossible, so PHP reports it.

This message applies to private, protected and public options.

This message appears when compiling PHP 8.4+ code, with asymmetric visibility, against PHP 8.3 or older. In that case, `protected(set)` is not recognized as a token, and only the `protected` part is used, leading to the error.

There are similar messages for multiple readonly, or multiple static.

## Example

```php
<?php

class X {
	private private static A $b;
}

class Y
{
    public protected(set) string $name;
}

?>
```

## Alternatives
+ Drop the extra visibility, and keep only one.
+ Compile with PHP 8.4 and more recent.
+ Remove asymmetric visibility.

## Related error messages
+ [multiple-static-modifiers-are-not-allowed](multiple-static-modifiers-are-not-allowed.html)
+ [multiple-readonly-modifiers-are-not-allowed](multiple-readonly-modifiers-are-not-allowed.html)
+ [multiple-%s-modifiers-are-not-allowed](multiple-%s-modifiers-are-not-allowed.html)
