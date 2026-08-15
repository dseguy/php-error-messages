# syntax error, unexpected token "__NAMESPACE__", expecting "("

## Description
It is not possible to use `__NAMESPACE__` or any other magic constant as a function or method name. This error is case insensitive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"__namespace__\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"__namespace__\",-expecting-\"(\".html","name":"syntax error, unexpected token \"__NAMESPACE__\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to use ``__NAMESPACE__`` or any other magic constant as a function or method name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"__namespace__\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function __NAMESPACE__() {}

?>
```

## Literal Examples
+ syntax-error

## Alternatives
+ Use another name than ``__NAMESPACE__``.
