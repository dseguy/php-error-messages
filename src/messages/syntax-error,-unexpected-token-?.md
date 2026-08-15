# syntax error, unexpected token "?"

## Description
`?` is used in several syntaxes in PHP. 

+ as `null` in a type specification (argument, returntype, property, class constant), when it is the first type specified: `?A $a`
+ as the terny operator `$condition ? $then : $else`. Then, the condition must be a complete expression.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"?\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"?\".html","name":"syntax error, unexpected token \"?\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"?\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// an unfinished ternary operation
$a = 1 + ? 3 : 2 ;

// ? should be written null in a type specification
function foo(a|? $a) {}

?>
```

## Alternatives
+ Finish the expression before the ``?`` in a ternary operation.
+ Use the ``null`` type when specifying a type.

## Related error messages
+ [syntax-error,-unexpected-token-"??"](asdf)
