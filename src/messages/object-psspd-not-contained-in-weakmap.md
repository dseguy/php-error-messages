# Object %s#%d not contained in WeakMap

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-psspd-not-contained-in-weakmap.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-psspd-not-contained-in-weakmap.html","name":"Object %s#%d not contained in WeakMap","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-10-09T10:15:26+00:00","dateModified":"2026-10-09T10:15:26+00:00","description":"This error is thrown when a ``WeakMap`` is read with an object that is not one of its keys","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-psspd-not-contained-in-weakmap.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is thrown when a `WeakMap` is read with an object that is not one of its keys. The message gives the class and the object id of the missing key, such as `stdClass#2`.

Reading a missing key is an error, unlike `isset()`, which returns `false` for it. Removing a missing key with `unset()` does nothing and does not raise this error.

Also note that a key is removed from the `WeakMap` as soon as the object is destroyed, so reading the map with an object that has already been freed raises this error too.

## Example

```php
<?php

$map = new WeakMap();
$object = new stdClass();

// $object was never added to the WeakMap
echo $map[$object];

?>
```

## Literal Examples
+ Object stdClass#2 not contained in WeakMap

## Alternatives
+ Check that the key is in the map with ``isset()`` before reading it: ``if (isset($map[$object])) { ... }``.
+ Use ``$map[$object] ?? $default`` to provide a default value when the key is missing. The ``??`` operator does not raise the error.
+ Make sure the object was added to the map with ``$map[$object] = $value`` before it is read.

## Related error messages
+ [weakmap-key-must-be-an-object](weakmap-key-must-be-an-object.html)
+ [cannot-append-to-weakmap](cannot-append-to-weakmap.html)

## Related error messages
+ [WeakMap](https://www.php.net/manual/en/class.weakmap.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()