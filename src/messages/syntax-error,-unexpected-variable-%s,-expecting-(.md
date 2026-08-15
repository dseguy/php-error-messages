# syntax error, unexpected variable "%s", expecting "("

## Description
In a function definition, the name of the function is separated from the argument list by an opening parenthesis. This is missing here. This applied to closures, arrow functions and methods' signatures.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-\"%s\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-\"%s\",-expecting-\"(\".html","name":"syntax error, unexpected variable \"%s\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"In a function definition, the name of the function is separated from the argument list by an opening parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-\"%s\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    function foo $name: , $value = 1) {}
    function bar ) {}

?>
```

## Alternatives
+ Add the missing opening parenthesis.
+ Provide a value for the parameter name in the functioncall.

## Related error messages
+ [unmatched-')'](asdf)
