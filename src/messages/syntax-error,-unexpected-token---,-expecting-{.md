# syntax error, unexpected token "\\", expecting "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token---,-expecting-{.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token---,-expecting-{.html","name":"syntax error, unexpected token \"\\\\\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This syntax error is related to the usage of PHP keyword in a namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token---,-expecting-{.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This syntax error is related to the usage of PHP keyword in a namespace. Until PHP 8.0, the namespace could not use any such keyword, and produced a compilation error.

## Example

```php
<?php

namespace A\eval\B;

?>
```

## Alternatives
+ Upgrade to PHP 8.0 or more recent.
+ Rename the namespace to avoid using PHP keywords.
