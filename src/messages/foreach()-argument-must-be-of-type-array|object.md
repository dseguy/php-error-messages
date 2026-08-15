# foreach() argument must be of type array|object

## Description
foreach() works on arrays or objects. 

For the arrays, all the elements of the array are read.

For the objects, it is either the public properties, read like an array; or the object has the Iterator interface: then, there is a list of specific methods to implements, which control how the object is traversed; the object may be a generator, which is a method that uses the `yield` keyword; finally, the object may be a PHP native iterator, or a child of them. 

Then, any other type is forbidden to be used with foreach(). This means all scalars elements, including string, integer and null.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/foreach()-argument-must-be-of-type-array|object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/foreach()-argument-must-be-of-type-array|object.html","name":"foreach() argument must be of type array|object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"foreach() works on arrays or objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/foreach()-argument-must-be-of-type-array|object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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