# Cannot rebind scope of closure created from method

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rebind-scope-of-closure-created-from-method.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rebind-scope-of-closure-created-from-method.html","name":"Cannot rebind scope of closure created from method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-08-03T22:21:30+02:00","dateModified":"2026-07-17T22:59:23+02:00","description":"When a closure is build from a method and an existing object, it is not possible to rebind it to another object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rebind-scope-of-closure-created-from-method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a closure is build from a method and an existing object, it is not possible to rebind it to another object.

## Example

```php
<?php

class X {
    function method () {}
}

class Y {}

$x = new X;
$fn = $x->method(...);
$ret = $fn->bindTo($x, Y::class);

?>
```

## Alternatives
+ To be rebound, the closure must be build from within the class.

## Related error messages
+ [cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9](cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html)
+ [cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9](cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9.html)

In more recent PHP versions, this error message is now :ref:`cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9`.