# syntax error, unexpected token "extends"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"extends\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"extends\".html","name":"syntax error, unexpected token \"extends\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"``extends`` is a PHP token, which appears inside a ``class`` or ``interface`` structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"extends\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`extends` is a PHP token, which appears inside a `class` or `interface` structure. It cannot be find anywhere else.

## Example

```php
<?php

X extends Y { }

enum Y extends Z { }

?>
```

## Alternatives
+ Check that a ``class`` or an ``interface`` have been started.

## Related error messages
+ [syntax-error,-unexpected-token-"extends",-expecting-"{"](syntax-error,-unexpected-token-extends,-expecting-{.html)
+ [syntax-error,-unexpected-token-"implements"](syntax-error,-unexpected-token-implements.html)
