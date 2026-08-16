# syntax error, unexpected token ";", expecting "->" or "?->" or "{" or "["

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"->\"-or-\"?->\"-or-\"{\"-or-\"[\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"->\"-or-\"?->\"-or-\"{\"-or-\"[\".html","name":"syntax error, unexpected token \";\", expecting \"->\" or \"?->\" or \"{\" or \"[\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"The ``&`` reference operator turns a value into a reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"->\"-or-\"?->\"-or-\"{\"-or-\"[\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `&` reference operator turns a value into a reference. It works with data containers, such as variables, properties or array elements. It doesn't work on literal constants. 

The error message suggestion to use extra operators such as `[` or `->` leads to a distinct error: `Cannot use temporary expression in write context`. The suggestion to use `{` is the then-deprecated curly brace syntax for array access. It is still valid in PHP 8.3, but removed in PHP 8.4.

## Example

```php
<?php

$a = &E_ALL;

const B = [1,2,3];
//Cannot use temporary expression in write context
$c = &B[2]; 

?>
```

## Alternatives
+ Store the constant in a variable, and make the reference on the variable.
+ Use constants by value, not by reference.

## Related error messages
+ [cannot-use-temporary-expression-in-write-context](cannot-use-temporary-expression-in-write-context.html)

In previous PHP versions, this error message used to be :ref:`syntax-error,-unexpected-';',-expecting-'['`.
In more recent PHP versions, this error message is now :ref:`syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"["`.