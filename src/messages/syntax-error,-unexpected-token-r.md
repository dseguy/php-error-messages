# syntax error, unexpected token ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-r.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-r.html","name":"syntax error, unexpected token \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This error appeas when the parenthesis is needed, but not at that place","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-r.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appeas when the parenthesis is needed, but not at that place. 

In the illustration, the parenthesis should be not be used directly after a multiplication sign: that operator needs a second operand.

## Example

```php
<?php

$a = (3 * 3 * );

?>
```

## Alternatives
+ Add the missing operand to the previous operator.

## Related error messages
+ [syntax-error,-unexpected-token-"}"](syntax-error,-unexpected-token-}.html)
+ [syntax-error,-unexpected-token-"("](syntax-error,-unexpected-token-\(.html)
+ [syntax-error,-unexpected-token-"]"](syntax-error,-unexpected-token-\].html)
