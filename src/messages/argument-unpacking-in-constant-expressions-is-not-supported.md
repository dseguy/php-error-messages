# Argument unpacking in constant expressions is not supported

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-unpacking-in-constant-expressions-is-not-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-unpacking-in-constant-expressions-is-not-supported.html","name":"Argument unpacking in constant expressions is not supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-07T22:26:09+01:00","dateModified":"2025-11-18T06:36:11+01:00","description":"It is not possible to use the ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-unpacking-in-constant-expressions-is-not-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to use the `...` operator in an static constant expression, with the `new` operator. 

On the other hand, it is possible to use it inside arrays to spread the elements. It is also possible to use it in a closure definition.

## Example

```php
<?php

const A = [1,2,3];

function foo($a = new C(...A)) {}

function goo($a = [...A, ...A])) {}


?>
```

## Alternatives
+ Access the array elements individually.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()