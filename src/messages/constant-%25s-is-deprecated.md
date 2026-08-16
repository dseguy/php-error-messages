# Constant %s is deprecated

## Description
This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version.

The error is emitted every time the constant is used: it may be for its actual intend, or anywhere else.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s-is-deprecated.html","name":"Constant %s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 15:31:33 +0000","dateModified":"Sat, 25 Jul 2026 15:31:33 +0000","description":"This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constant-%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

error_reporting(E_STRICT);

?>
```

## Literal Examples
+ Constant E_STRICT is deprecated

## Alternatives
+ Stop using that global constant.
+ Find the replacement for this global constant: it might be another constant, or a different command entirely.

## Related error messages
+ [constant-%s::%s-is-deprecated](constant-%s::%s-is-deprecated.html)
+ [trait-%s-used-by-%s-is-deprecated%s](trait-%s-used-by-%s-is-deprecated%s.html)
