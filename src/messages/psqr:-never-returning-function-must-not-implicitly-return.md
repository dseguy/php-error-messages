# %s(): never-returning function must not implicitly return

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-never-returning-function-must-not-implicitly-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-never-returning-function-must-not-implicitly-return.html","name":"%s(): never-returning function must not implicitly return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-08-22T23:00:10+02:00","dateModified":"2026-05-26T23:19:08+02:00","description":"A function with the never return type must return anything","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-never-returning-function-must-not-implicitly-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A function with the never return type must return anything. This means no `return` keyword, but also, no possibility to reach the end of the method, as it would trigger automatically a `return null;`.

## Example

```php
<?php

function foo(): never {
    if (true) {
        throw new Exception('bad');
    }
}

foo();
?>
```

## Literal Examples
+ foo(): never-returning function must not implicitly return

## Alternatives
+ Add a ``die`` at the end of the method.
+ Add a ``throw`` at the end of the method.

In more recent PHP versions, this error message is now :ref:`%s():-never-returning-%s-must-not-implicitly-return`.