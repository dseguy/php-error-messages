# Calling %s() on an object is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-psqr-on-an-object-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-psqr-on-an-object-is-deprecated.html","name":"Calling %s() on an object is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-22T21:56:02-05:00","dateModified":"2025-09-18T06:57:58+02:00","description":"``prev()``, ``current()``, ``next()`` and ``reset()`` where php native functions used to navigate in arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-psqr-on-an-object-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`prev()`, `current()`, `next()` and `reset()` where php native functions used to navigate in arrays. They also applied to objects, although this is an accidental feature. Nowadays, using object with these functions is deprecated.

## Example

```php
<?php

$object = (object) ['a' => 1];

echo current($object);

?>
```

## Literal Examples
+ Calling prev() on an object is deprecated
+ Calling next() on an object is deprecated
+ Calling reset() on an object is deprecated
+ Calling current() on an object is deprecated

## Alternatives
+ Cast the object to an array, and store it in a variable before using the mentioned functions.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[passingObjectIsDeprecated](passingObjectIsDeprecated)