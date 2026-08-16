# syntax error, unexpected integer "%s", expecting ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-integer-\"%s\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-integer-\"%s\",-expecting-\")\".html","name":"syntax error, unexpected integer \"%s\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-integer-\"%s\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator. The suggestion to use a closing parenthesis is valid, though not the only one.

## Example

```php
<?php

foo(arg new B());

class B {}

function foo(B $arg) {}

?>
```

## Alternatives
+ Add the missing ``:`` before the integer.
+ Add the missing ``)`` before the integer, and may be a comma, depending on the context.
