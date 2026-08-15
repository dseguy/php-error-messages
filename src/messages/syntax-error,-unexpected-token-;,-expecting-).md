# syntax error, unexpected token ";", expecting ")"

## Description
A semi-colon was found after an opening parenthesis. To keep the code balanced, PHP expects the parenthesis to be closed before finishing the instruction.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\")\".html","name":"syntax error, unexpected token \";\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A semi-colon was found after an opening parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

array(1,2; );

foo(3,4;);

function foo($a = 3;) {}
?>
```

## Alternatives
+ Remove the semi-colon.
+ Close the parenthesis before the semi-colon.

## Related error messages
+ [syntax-error,-unexpected-token-";",-expecting-","-or-")"](asdf)
