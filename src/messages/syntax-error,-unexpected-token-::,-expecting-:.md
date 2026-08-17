# syntax error, unexpected token "::", expecting ":"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-::,-expecting-:.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-::,-expecting-:.html","name":"syntax error, unexpected token \"::\", expecting \":\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"In this example, ``Match`` is a PHP keyword, and cannot be part of a static call, with the operator ``::``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-::,-expecting-:.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In this example, `Match` is a PHP keyword, and cannot be part of a static call, with the operator `::`. On the other hand, `Match` could be a parameter name, where the `foo` function, has a `$Match` parameter. Hence, the suggestion to use `:` a single colon.

This error may also appear with other keywords, such as `Switch`. It is also case-insensitive.

## Example

```php
<?php

foo(Match::a());

?>
```

## Alternatives
+ Use a single colon, if ``$Match`` is actually a parameter name.
+ Rename the ``Match`` class to avoid conflicts with PHP keywords.
