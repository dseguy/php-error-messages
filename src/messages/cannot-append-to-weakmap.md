# Cannot append to WeakMap

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-append-to-weakmap.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-append-to-weakmap.html","name":"Cannot append to WeakMap","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-10-09T10:15:26+00:00","dateModified":"2026-10-09T10:15:26+00:00","description":"``WeakMap`` is a map from objects to values, and each key is an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-append-to-weakmap.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`WeakMap` is a map from objects to values, and each key is an object. Unlike an `array`, it has no automatic integer index, so the `[]` syntax, which appends a new element, cannot be used with it.

To add an entry, give the object that will be the key: `$map[$object] = $value`.

## Example

```php
<?php

$map = new WeakMap();

// A WeakMap is keyed by objects, so there is no next integer key to append to
$map[] = 'Damien';

?>
```

## Literal Examples
+ Cannot append to WeakMap

## Alternatives
+ Use an object as the key: ``$map[$object] = $value``, instead of ``$map[] = $value``.
+ If you need a list of values with integer keys, use a regular ``array`` instead of a ``WeakMap``.

## Related error messages
+ [weakmap-key-must-be-an-object](weakmap-key-must-be-an-object.html)

## Related error messages
+ [WeakMap](https://www.php.net/manual/en/class.weakmap.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()