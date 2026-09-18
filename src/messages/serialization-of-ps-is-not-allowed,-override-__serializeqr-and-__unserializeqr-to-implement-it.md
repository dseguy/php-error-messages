# Serialization of %s is not allowed, override __serialize() and __unserialize() to implement it

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/serialization-of-ps-is-not-allowed,-override-__serializeqr-and-__unserializeqr-to-implement-it.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/serialization-of-ps-is-not-allowed,-override-__serializeqr-and-__unserializeqr-to-implement-it.html","name":"Serialization of %s is not allowed, override __serialize() and __unserialize() to implement it","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T15:50:29+00:00","dateModified":"2026-09-18T15:50:29+00:00","description":"Some internal classes hold state, such as a connection handle or a resource, that cannot be meaningfully turned into a string and restored later","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/serialization-of-ps-is-not-allowed,-override-__serializeqr-and-__unserializeqr-to-implement-it.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Some internal classes hold state, such as a connection handle or a resource, that cannot be meaningfully turned into a string and restored later. To prevent silent data loss or unusable objects after `unserialize()`, PHP flags these classes as not serializable by default. Since PHP 7.4, a class can opt back in by implementing the `__serialize()` and `__unserialize()` magic methods, giving full control over what state is actually persisted and how it is restored. Trying to `serialize()` an instance of such a class, or of a subclass that does not add these methods, throws this exception.

## Example

```php
<?php

$pdo = new PDO('sqlite::memory:');

$data = serialize($pdo);

?>
```

## Literal Examples
+ Serialization of PDO is not allowed, override __serialize() and __unserialize() to implement it

## Alternatives
+ Create a subclass that implements ``__serialize()`` and ``__unserialize()`` to control exactly which state is persisted.
+ Avoid serializing the object directly; store only the data needed to recreate it, then reconstruct it manually.

## Related error messages
+ [unserialization-of-%s-is-not-allowed,-override-__serialize()-and-__unserialize()-to-implement-it](unserialization-of-%s-is-not-allowed,-override-\_\_serialize\(\)-and-\_\_unserialize\(\)-to-implement-it.html)

In more recent PHP versions, this error message is now :ref:`unserialization-of-%s-is-not-allowed,-override-__serialize()-and-__unserialize()-to-implement-it`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()