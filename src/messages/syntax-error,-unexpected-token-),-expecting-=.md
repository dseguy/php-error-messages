# syntax error, unexpected token ")", expecting "="

## Description
In this case, the `=` is missing, and the 1 has been merged into the `strict_types` to become an identifier. PHP expects a `=` after this identifier.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\",-expecting-\"=\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\",-expecting-\"=\".html","name":"syntax error, unexpected token \")\", expecting \"=\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"In this case, the ``=`` is missing, and the 1 has been merged into the ``strict_types`` to become an identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\",-expecting-\"=\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

declare(strict_types1);

?>
```

## Alternatives
+ Add ``=`` after ``strict_types``.
