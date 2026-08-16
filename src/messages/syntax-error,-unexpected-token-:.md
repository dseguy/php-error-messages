# syntax error, unexpected token ":"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\":\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\":\".html","name":"syntax error, unexpected token \":\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A syntax error is a generic error, where PHP could not compile the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\":\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A syntax error is a generic error, where PHP could not compile the code. Here are some classic typo or seemingly valid code that leads to this error.

+ Since PHP 8.0, named parameters may be used, though parameters don't use the initial `$` sign.

## Example

```php
<?php

// calling a named parameter, with the $ in the parameter name
foo($c: 1);

?>
```

## Alternatives
+ Fix the name of the parameter.
