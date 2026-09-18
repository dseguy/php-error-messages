# Unserialization of %s is not allowed, override __serialize() and __unserialize() to implement it

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unserialization-of-ps-is-not-allowed,-override-__serializeqr-and-__unserializeqr-to-implement-it.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unserialization-of-ps-is-not-allowed,-override-__serializeqr-and-__unserializeqr-to-implement-it.html","name":"Unserialization of %s is not allowed, override __serialize() and __unserialize() to implement it","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T15:50:33+00:00","dateModified":"2026-09-18T15:50:33+00:00","description":"This is the mirror error of the serialization one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unserialization-of-ps-is-not-allowed,-override-__serializeqr-and-__unserializeqr-to-implement-it.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is the mirror error of the serialization one. Some internal classes hold state, such as a connection handle or a resource, that cannot be meaningfully rebuilt from a plain serialized string. Unless the class implements `__serialize()` and `__unserialize()` (available since PHP 7.4) to define its own restoration logic, `unserialize()` refuses to instantiate the object from serialized data and throws this exception instead of returning a half-built, unusable instance.

## Example

```php
<?php

$serialized = 'O:3:PDO:0:{}';

$pdo = unserialize($serialized);

?>
```

## Literal Examples
+ Unserialization of PDO is not allowed, override __serialize() and __unserialize() to implement it

## Alternatives
+ Create a subclass that implements ``__serialize()`` and ``__unserialize()`` to control exactly how the object is restored.
+ Do not serialize instances of this class in the first place; persist the data needed to recreate it and rebuild the object manually.

## Related error messages
+ [serialization-of-%s-is-not-allowed,-override-__serialize()-and-__unserialize()-to-implement-it](serialization-of-%s-is-not-allowed,-override-\_\_serialize\(\)-and-\_\_unserialize\(\)-to-implement-it.html)

In previous PHP versions, this error message used to be :ref:`serialization-of-%s-is-not-allowed,-override-__serialize()-and-__unserialize()-to-implement-it`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()