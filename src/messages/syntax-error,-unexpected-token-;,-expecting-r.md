# syntax error, unexpected token ";", expecting ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-;,-expecting-r.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-;,-expecting-r.html","name":"syntax error, unexpected token \";\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"A semi-colon was found after an opening parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-;,-expecting-r.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A semi-colon was found after an opening parenthesis. To keep the code balanced, PHP expects the parenthesis to be closed before finishing the instruction.

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
+ [syntax-error,-unexpected-token-";",-expecting-","-or-")"](syntax-error,-unexpected-token-;,-expecting-,-or-\).html)
