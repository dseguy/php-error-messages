# Current function is not a closure

## Description
The `Closure::getCurrent()` method may only be called inside a closure or an arrow function. 

This error message also applies to methods.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/current-function-is-not-a-closure.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/current-function-is-not-a-closure.html","name":"Current function is not a closure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``Closure::getCurrent()`` method may only be called inside a closure or an arrow function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/current-function-is-not-a-closure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo() {
    echo Closure::getCurrent();
}

foo();

?>
```

## Alternatives
+ Remove the call to ``Closure::getCurrent()`` from the function.
+ Turn the funciton into a closure or an arrow function.
