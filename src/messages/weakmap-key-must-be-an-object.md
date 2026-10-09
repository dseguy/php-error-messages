# WeakMap key must be an object

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/weakmap-key-must-be-an-object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/weakmap-key-must-be-an-object.html","name":"WeakMap key must be an object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-10-09T09:50:11+00:00","dateModified":"2026-10-09T09:50:11+00:00","description":"``WeakMap`` associates data with objects, and it holds its keys weakly: when a key object is destroyed, its entry is removed automatically","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/weakmap-key-must-be-an-object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`WeakMap` associates data with objects, and it holds its keys weakly: when a key object is destroyed, its entry is removed automatically. Because of this, only objects can be used as keys. Any other value, such as a string, an integer, an array or `null`, triggers a `TypeError`.

The check applies to every access to a `WeakMap` through array syntax: assignment, reading, `isset()`, `empty()` and `unset()`.

If you need to index data by a scalar value, use a regular `array` instead.

## Example

```php
<?php

$map = new WeakMap();

// WeakMap keys are held weakly, so they must be objects
$map['name'] = 'Damien';

?>
```

## Literal Examples
+ WeakMap key must be an object

## Alternatives
+ Use an object as the key, such as the instance the data relates to.
+ Use a regular array when the keys are strings or integers, as arrays do not need weak references.
+ Check the key with is_object() before accessing the WeakMap.

## Related error messages
+ [illegal-offset-type](illegal-offset-type.html)

## Related error messages
+ [WeakMap](https://www.php.net/manual/en/class.weakmap.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()