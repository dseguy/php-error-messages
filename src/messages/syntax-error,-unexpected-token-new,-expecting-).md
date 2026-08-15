# syntax error, unexpected token "new", expecting ")"

## Description
This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator. The suggestion to use a closing parenthesis is valid, though not the only one.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"new\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"new\",-expecting-\")\".html","name":"syntax error, unexpected token \"new\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"new\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

foo(arg new B());

class B {}

function foo(B $arg) {}

?>
```

## Alternatives
+ Add the missing ``:`` before the new operator.
+ Add the missing ``)`` before the new operator, and add a semi-colon or a comman, depending on the context.
