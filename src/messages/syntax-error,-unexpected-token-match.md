# syntax error, unexpected token "match"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-match.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-match.html","name":"syntax error, unexpected token \"match\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"In PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-match.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In PHP 8.0, the `match` statement was added to PHP feature: it is a similar feature to `switch`. `match` is now a PHP reserved keyword, and, as such, cannot be used everywhere. For example, it cannot be used as a class, function or interface name; it cannot be used in a function call, although it may be used in method call.

## Example

```php
<?php

$x = match ($a) {};

?>
```

## Alternatives
+ Change the name to something else than ``match``.
