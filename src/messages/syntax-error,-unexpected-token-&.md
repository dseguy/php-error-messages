# syntax error, unexpected token "&"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-&.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-&.html","name":"syntax error, unexpected token \"&\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"The ``&`` operator is used in two distinct situations: as the bitwise operator, between two different values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-&.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `&` operator is used in two distinct situations: as the bitwise operator, between two different values; as the reference operator, before a variable.

As the reference operator, it may be used in a method signature, to identify a passed-by-reference argument. It may not be used anymore at call time, for sending an argument nor receiving a value. 

The reference operator returns a new reference, and it should be stored in another variable (or any data container). Otherwise, it is.

## Example

```php
<?php

function foo(&$a) {}

// Cannot make a reference at call time
foo(&$c);

// Cannot return a reference at call time
$d = &foo($c);

?>
```

## Alternatives
+ Remove the ``&`` in function call's argument, and put it in the function signature.
+ Remove the ``&`` in function call returned value, and put it in the function signature.

## Related error messages
+ [syntax-error,-unexpected-token-"&",-expecting-end-of-file](syntax-error,-unexpected-token-&,-expecting-end-of-file.html)
