# Constant %s::%s is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s::%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s::%s-is-deprecated.html","name":"Constant %s::%s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-07T19:42:12+01:00","dateModified":"2026-07-25T18:45:01+02:00","description":"This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s::%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version.

The error is emitted every time the class constant is used: it may be for its actual intend, or anywhere else.

The error message is also emitted with the usage of the Deprecated attribute, since PHP 8.4.

## Example

```php
<?php

class X {
	#[Deprecated()]
	public const D = deprecated;
}

echo X::D;

?>
```

## Literal Examples
+ Constant X::D is deprecated

## Alternatives
+ Stop using that class constant.
+ Find the replacement for this class constant: it might be another constant, or a different command entirely.

## Related error messages
+ [constant-%s-is-deprecated](constant-%s-is-deprecated.html)
+ [trait-%s-used-by-%s-is-deprecated%s](trait-%s-used-by-%s-is-deprecated%s.html)
