# syntax error, unexpected token "implements"

## Description
`implements` is a PHP token, which appears inside a `class` or `enum` structure. It cannot be find anywhere else.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"implements\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"implements\".html","name":"syntax error, unexpected token \"implements\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"``implements`` is a PHP token, which appears inside a ``class`` or ``enum`` structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"implements\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

X extends Y { }

enum Y extends Z { }

?>
```

## Alternatives
+ Check that a ``class`` or an ``enum`` have been started.

## Related error messages
+ [syntax-error,-unexpected-token-"extends"](asdf)
