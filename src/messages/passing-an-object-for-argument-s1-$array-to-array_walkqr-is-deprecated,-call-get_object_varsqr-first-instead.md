# Passing an object for argument #1 $array to array_walk() is deprecated, call get_object_vars() first instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s1-$array-to-array_walkqr-is-deprecated,-call-get_object_varsqr-first-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s1-$array-to-array_walkqr-is-deprecated,-call-get_object_varsqr-first-instead.html","name":"Passing an object for argument #1 $array to array_walk() is deprecated, call get_object_vars() first instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:00:59+00:00","dateModified":"2026-09-20T20:00:59+00:00","description":"``array_walk()`` has always accepted an object in place of ``$array`` as an undocumented convenience, iterating over its accessible properties the same way it iterates array elements \u2014 including private and protected properties when called from inside the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s1-$array-to-array_walkqr-is-deprecated,-call-get_object_varsqr-first-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`array_walk()` has always accepted an object in place of `$array` as an undocumented convenience, iterating over its accessible properties the same way it iterates array elements — including private and protected properties when called from inside the class. PHP 8.6 deprecates this implicit array/object interchangeability, since it makes visibility rules leak into what looks like ordinary array iteration.

## Example

```php
<?php

class Test {
    public $foo = 'foo';
    public $bar = 'bar';
}

array_walk(new Test(), function ($value, $key) {
    var_dump($key, $value);
});

?>
```

## Alternatives
+ Convert the object to an array first with ``get_object_vars($obj)`` (from outside the class) and pass that to array_walk().
+ Iterate the object directly with foreach if you don't need array_walk()'s by-reference callback semantics.

## Related error messages
+ [passing-an-object-for-argument-#1-$array-to-array_walk_recursive()-is-deprecated,-call-get_object_vars()-first-instead](passing-an-object-for-argument-#1-$array-to-array\_walk\_recursive\(\)-is-deprecated,-call-get\_object\_vars\(\)-first-instead.html)

In more recent PHP versions, this error message is now :ref:`passing-an-object-for-argument-#1-$array-to-array_walk_recursive()-is-deprecated,-call-get_object_vars()-first-instead`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()