# %s(): never-returning %s must not implicitly return

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-never-returning-ps-must-not-implicitly-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-never-returning-ps-must-not-implicitly-return.html","name":"%s(): never-returning %s must not implicitly return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-06T22:24:52+01:00","dateModified":"2025-09-18T06:57:58+02:00","description":"An implicit return is a method reaching the end of its body block, and ending its execution without an explicit ``return`` statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-never-returning-ps-must-not-implicitly-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An implicit return is a method reaching the end of its body block, and ending its execution without an explicit `return` statement. In fact, PHP executes an implicit return statement, et returns the value `NULL`. In the case of a method, whose return type is `never`, this should not happen. There must be a call to `die`, `exit`, or `throw`, or any other mean to prevent this function to reach its normal ending. 

This error is only reported at execution time.

## Example

```php
<?php

function myDeath(): never {

    if (rand(0, 1)) {
        die();
    }
}

myDeath();

?>
```

## Literal Examples
+ myDeath(): never-returning function must not implicitly return

## Alternatives
+ Add a ``die`` or ``exit`` before the end of the method.
+ Add a ``throw`` before the end of the method.
+ Add an infinite loop in the method.

In previous PHP versions, this error message used to be :ref:`%s():-never-returning-function-must-not-implicitly-return`.