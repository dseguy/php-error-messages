# Passing an object for argument #1 $array to array_walk_recursive() is deprecated, call get_object_vars() first instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s1-$array-to-array_walk_recursiveqr-is-deprecated,-call-get_object_varsqr-first-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s1-$array-to-array_walk_recursiveqr-is-deprecated,-call-get_object_varsqr-first-instead.html","name":"Passing an object for argument #1 $array to array_walk_recursive() is deprecated, call get_object_vars() first instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T22:21:00+02:00","dateModified":"2026-09-20T22:21:00+02:00","description":"Like ``array_walk()``, ``array_walk_recursive()`` has always accepted an object in place of ``$array``, iterating over its accessible properties (recursing into any that are themselves arrays or objects) instead of requiring an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s1-$array-to-array_walk_recursiveqr-is-deprecated,-call-get_object_varsqr-first-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Like `array_walk()`, `array_walk_recursive()` has always accepted an object in place of `$array`, iterating over its accessible properties (recursing into any that are themselves arrays or objects) instead of requiring an array. PHP 8.6 deprecates this implicit object handling, along with the equivalent case in `array_walk()`.

## Example

```php
<?php

class Test {
    public $foo = 'foo';
    public $bar = ['x', 'y'];
}

array_walk_recursive(new Test(), function ($value, $key) {
    var_dump($key, $value);
});

?>
```

## Alternatives
+ Convert the object to an array first with ``get_object_vars($obj)`` and pass that to array_walk_recursive().
+ Write a small recursive helper for objects if visibility of nested properties matters.

## Related error messages
+ [passing-an-object-for-argument-#1-$array-to-array_walk()-is-deprecated,-call-get_object_vars()-first-instead](passing-an-object-for-argument-#1-$array-to-array\_walk\(\)-is-deprecated,-call-get\_object\_vars\(\)-first-instead.html)

In previous PHP versions, this error message used to be :ref:`passing-an-object-for-argument-#1-$array-to-array_walk()-is-deprecated,-call-get_object_vars()-first-instead`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()