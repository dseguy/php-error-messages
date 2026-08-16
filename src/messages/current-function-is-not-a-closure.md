# Current function is not a closure

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/current-function-is-not-a-closure.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/current-function-is-not-a-closure.html","name":"Current function is not a closure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-10-25T11:08:30+02:00","dateModified":"2025-10-25T11:08:30+02:00","description":"The ``Closure::getCurrent()`` method may only be called inside a closure or an arrow function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/current-function-is-not-a-closure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `Closure::getCurrent()` method may only be called inside a closure or an arrow function. 

This error message also applies to methods.

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
