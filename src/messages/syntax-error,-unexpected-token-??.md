# syntax error, unexpected token "??"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"??\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"??\".html","name":"syntax error, unexpected token \"??\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"??\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
?? is used as the coalesce operator. 

The expression on the left side of that operator must be completed of it to be valid.

## Example

```php
<?php

// an unfinished coalesce operation
$a = 1 + ?? 3;

?>
```

## Alternatives
+ Finish the expression before the ``?`` in a ternary operation.

## Related error messages
+ [syntax-error,-unexpected-token-"?"](syntax-error,-unexpected-token-?.html)
