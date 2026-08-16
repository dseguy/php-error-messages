# syntax error, unexpected token "?->"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"?->\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"?->\".html","name":"syntax error, unexpected token \"?->\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This error reports that the object syntax was not expected there","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"?->\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error reports that the object syntax was not expected there. 

One classic reason is the new syntax in PHP 8.4, where parenthesis are not necessary, right after a new, to call properties or methods. This syntax actually requires the parenthesis.

## Example

```php
<?php

// should be new X()?->method();
new X?->method();

?>
```

## Alternatives
+ Add the parenthesis on the ``new`` call.

## Related error messages
+ [syntax-error,-unexpected-token-"->"](syntax-error,-unexpected-token-->.html)
