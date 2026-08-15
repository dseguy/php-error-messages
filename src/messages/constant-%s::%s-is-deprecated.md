# Constant %s::%s is deprecated

## Description
This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version.

The error is emitted every time the class constant is used: it may be for its actual intend, or anywhere else.

The error message is also emitted with the usage of the Deprecated attribute, since PHP 8.4.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s::%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s::%s-is-deprecated.html","name":"Constant %s::%s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 15:31:33 +0000","dateModified":"Sat, 25 Jul 2026 15:31:33 +0000","description":"This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s::%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [constant-%s-is-deprecated](asdf)
+ [trait-%s-used-by-%s-is-deprecated%s](asdf)
