# syntax error, unexpected end of file

## Description
The `unexpected end of file` happens when PHP has not finished parsing a file, and still expected a few more tokens to complete it. 

Usually, this means that not enough code was provided, or also, that some code instruction were not completed as expected. 

In the example here, the expression is completed with a semi-colon, or a closing PHP tag. Both would conclude the expression, and the script, but they are not available.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-end-of-file.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-end-of-file.html","name":"syntax error, unexpected end of file","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``unexpected end of file`` happens when PHP has not finished parsing a file, and still expected a few more tokens to complete it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-end-of-file.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$x = 1
```

## Alternatives
+ Make sure all expression are completed.
