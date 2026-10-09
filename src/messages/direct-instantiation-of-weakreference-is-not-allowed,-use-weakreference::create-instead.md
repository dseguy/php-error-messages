# Direct instantiation of WeakReference is not allowed, use WeakReference::create instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/direct-instantiation-of-weakreference-is-not-allowed,-use-weakreference::create-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/direct-instantiation-of-weakreference-is-not-allowed,-use-weakreference::create-instead.html","name":"Direct instantiation of WeakReference is not allowed, use WeakReference::create instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-10-09T14:05:12+00:00","dateModified":"2026-10-09T14:05:12+00:00","description":"A ``WeakReference`` holds a reference to an object without preventing that object from being destroyed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/direct-instantiation-of-weakreference-is-not-allowed,-use-weakreference::create-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A `WeakReference` holds a reference to an object without preventing that object from being destroyed. Such objects must be created with the static method `WeakReference::create()`, which takes the object to watch as its argument. The `new WeakReference()` syntax is not allowed, and it throws an `Error`.

`WeakReference::create()` also returns the same `WeakReference` instance each time it is called with the same object, so comparing two references with `===` tells whether they point to the same object.

## Example

```php
<?php

$object = new stdClass();

// WeakReference objects can only be created with WeakReference::create()
$reference = new WeakReference();

?>
```

## Literal Examples
+ Direct instantiation of WeakReference is not allowed, use WeakReference::create instead

## Alternatives
+ Replace ``new WeakReference($object)`` with ``WeakReference::create($object)``.
+ Once created, call ``get()`` on the reference to retrieve the object, or ``null`` if it has been destroyed.

## Related error messages
+ [WeakReference](https://www.php.net/manual/en/class.weakreference.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()