# syntax error, unexpected token "(", expecting "::"

## Description
This error appears when calling `static` as a function. `static` cannot be used as a function name. It may be used as class name, in a `new` expression, or as an method. It is often used in a static call, for methods, constant or properties.

It is not recommended to use `static` as a method name.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\",-expecting-\"::\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\",-expecting-\"::\".html","name":"syntax error, unexpected token \"(\", expecting \"::\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error appears when calling ``static`` as a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\",-expecting-\"::\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

static();

?>
```

## Alternatives
+ Add the object before the method name.
+ Add the class name and ``::`` before the method name.
+ Add the ``new`` operator before the ``static`` keyword. Make sure that code is within a class or assimilated.
