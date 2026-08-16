# syntax error, unexpected token "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"{\".html","name":"syntax error, unexpected token \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A syntax error is a generic error, where PHP could not compile the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A syntax error is a generic error, where PHP could not compile the code. Here are some classic typo or seemingly valid code that leads to this error.

+ Since PHP 8.4, array syntax with curly braces are not valid anymore. It used to yield a warning, and it is now totally abandoned.
+ A missing closing parenthesis in a crowded parenthesis space, leads to an error in the next block.

## Example

```php
<?php

// the curly bracket array syntax has been removed
$a{1} = 2;

// curly brackets start a block, and blocks are not allowed inside expressions (the && )
$a == 1 && {1} : 3;

?>
```

## Alternatives
+ Move to the square bracked array syntax only.
+ Add the missing closing parenthesis to the if() statement.

## Related error messages
+ [syntax-error,-unexpected-token-"}"](syntax-error,-unexpected-token-}.html)
