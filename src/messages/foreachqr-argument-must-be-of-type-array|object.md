# foreach() argument must be of type array|object

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/foreachqr-argument-must-be-of-type-array|object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/foreachqr-argument-must-be-of-type-array|object.html","name":"foreach() argument must be of type array|object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-04-19T13:20:27+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"foreach() works on arrays or objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/foreachqr-argument-must-be-of-type-array|object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
foreach() works on arrays or objects. 

For the arrays, all the elements of the array are read.

For the objects, it is either the public properties, read like an array; or the object has the Iterator interface: then, there is a list of specific methods to implements, which control how the object is traversed; the object may be a generator, which is a method that uses the `yield` keyword; finally, the object may be a PHP native iterator, or a child of them. 

Then, any other type is forbidden to be used with foreach(). This means all scalars elements, including string, integer and null.

## Example

```php
<?php

    $source = null;
    foreach($source as $x) { }

?>
```

## Alternatives
+ Check that the source of the foreach can be used with is_iterable().

## Related error messages
+ [PHPIterators](https://inspector.dev/php-iterators-for-walking-through-data-structures-fasttips/)
+ [PHPsIterator](https://www.php.net/iterator)
+ [PHPsGenerator](https://www.php.net/manual/en/class.generator.php)

In previous PHP versions, this error message used to be :ref:`invalid-argument-supplied-for-foreach()`.