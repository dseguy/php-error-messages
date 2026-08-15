# syntax error, unexpected token "extends", expecting identifier

## Description
The `extends` keyword may only be used after a class name, an interface name, or the parenthesis of an anonymous class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"extends\",-expecting-identifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"extends\",-expecting-identifier.html","name":"syntax error, unexpected token \"extends\", expecting identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The ``extends`` keyword may only be used after a class name, an interface name, or the parenthesis of an anonymous class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"extends\",-expecting-identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// this is missing the name of the class 
class  extends B {}

// this is missing the name of the interface
interface  extends B {}

?>
```

## Alternatives
+ Add a name to the class.
+ Add a name to the interface.
+ Add set of parenthesis to the class to make it anonymous.
