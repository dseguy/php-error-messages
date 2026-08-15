# syntax error, unexpected token "match", expecting "("

## Description
Since `match` was introduced as a PHP keyword, it cannot be used anymore to name a class, interface, enum, trait, function or global constant. It may be used to name a class constant, method or property.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"match\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"match\",-expecting-\"(\".html","name":"syntax error, unexpected token \"match\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Since ``match`` was introduced as a PHP keyword, it cannot be used anymore to name a class, interface, enum, trait, function or global constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"match\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function match($a) {}

?>
```

## Alternatives
+ Change the name ``match``.
+ Make the function a method in a class.
