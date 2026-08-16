# syntax error, unexpected token "%"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"%\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"%\".html","name":"syntax error, unexpected token \"%\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"PHP accepts one percentage ``%``, for modulo","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"%\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP accepts one percentage `%`, for modulo. The `%` operator requires 2 operands, one before, and one after. This is not the same as `+` and `-`, which can be used as unary operator.

## Example

```php
<?php

$a = 2 + % 3;

?>
```

## Alternatives
+ Remove the superfluous percentage.

## Related error messages
+ [syntax-error,-unexpected-token-"*"](syntax-error,-unexpected-token-\*.html)
