# syntax error, unexpected ')', expecting variable (T_VARIABLE)

## Description
This error is related to the support the trailing comma in function calls: in PHP 7.4, it is allowed to add a final comma at the end of the arguments list, and yet, not provide an extra argument.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-')',-expecting-variable-(t_variable).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-')',-expecting-variable-(t_variable).html","name":"syntax error, unexpected ')', expecting variable (T_VARIABLE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error is related to the support the trailing comma in function calls: in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-')',-expecting-variable-(t_variable).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo($a,
             $b,
             $c) { echo __METHOD__; }

echo foo(1,
         2,
         3,
         );

?>
```

## Alternatives
+ Upgrade to PHP 7.4.
+ Remove the trailing comma.
