# syntax error, unexpected token "extends", expecting "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"extends\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"extends\",-expecting-\"{\".html","name":"syntax error, unexpected token \"extends\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"When declaring a class, the ``extends`` keyword must appear before the ``implements`` one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"extends\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When declaring a class, the `extends` keyword must appear before the `implements` one. There is only one (or no) class extension, so the `extends` list is often shorter than the implements list.

## Example

```php
<?php

class X implements I1, I2 extends W {}

?>
```

## Alternatives
+ Move the ``extends`` keyword, and its class, right after the name of the class, and before the ``implements`` keyword.
+ Remove the ``extends`` keyword.

## Related error messages
+ [syntax-error,-unexpected-token-"extends"](syntax-error,-unexpected-token-extends.html)
