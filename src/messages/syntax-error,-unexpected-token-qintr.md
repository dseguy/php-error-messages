# syntax error, unexpected token "(int)"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-qintr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-qintr.html","name":"syntax error, unexpected token \"(int)\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This is a bug in the parser engine of PHP: ``(int)``, ``(array)`` or the other cast operators, are recognized early in the code parsing, and are also confused inside a function call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-qintr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is a bug in the parser engine of PHP: `(int)`, `(array)` or the other cast operators, are recognized early in the code parsing, and are also confused inside a function call.

## Example

```php
<?php

var_dump(int);

?>
```

## Alternatives
+ Do not use any global constant, with the name of a cast operator: ``int``, ``float``, ``unset``, etc.
