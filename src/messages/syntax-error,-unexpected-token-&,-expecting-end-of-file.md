# syntax error, unexpected token "&", expecting end of file

## Description
`&` is the reference operator. It returns a reference to a value, and cannot be used standalone, or on the left part of an assignation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"&\",-expecting-end-of-file.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"&\",-expecting-end-of-file.html","name":"syntax error, unexpected token \"&\", expecting end of file","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``&`` is the reference operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"&\",-expecting-end-of-file.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

&$x;

&E_ALL;

$c = &'33';

?>
```

## Alternatives
+ Remove the whole expression.
+ Put this expression in another variable, with an assignation.
+ Put this expression in another variable, and make the reference on that variable.

## Related error messages
+ [syntax-error,-unexpected-token-"&"](syntax-error,-unexpected-token-&.html)
