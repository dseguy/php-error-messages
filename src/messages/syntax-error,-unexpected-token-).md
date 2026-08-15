# syntax error, unexpected token ")"

## Description
This error appeas when the parenthesis is needed, but not at that place. 

In the illustration, the parenthesis should be not be used directly after a multiplication sign: that operator needs a second operand.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\".html","name":"syntax error, unexpected token \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error appeas when the parenthesis is needed, but not at that place","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$a = (3 * 3 * );

?>
```

## Alternatives
+ Add the missing operand to the previous operator.

## Related error messages
+ [syntax-error,-unexpected-token-"}"](asdf)
+ [syntax-error,-unexpected-token-"("](asdf)
+ [syntax-error,-unexpected-token-"]"](asdf)
