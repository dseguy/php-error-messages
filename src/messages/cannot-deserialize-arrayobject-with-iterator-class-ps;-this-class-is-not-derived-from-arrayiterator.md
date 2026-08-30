# Cannot deserialize ArrayObject with iterator class %s; this class is not derived from ArrayIterator

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-deserialize-arrayobject-with-iterator-class-ps;-this-class-is-not-derived-from-arrayiterator.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-deserialize-arrayobject-with-iterator-class-ps;-this-class-is-not-derived-from-arrayiterator.html","name":"Cannot deserialize ArrayObject with iterator class %s; this class is not derived from ArrayIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-28T21:04:20+00:00","dateModified":"2026-08-28T21:04:20+00:00","description":"``ArrayObject`` can be constructed with a custom iterator class (via its second constructor argument), used in place of the default ``ArrayIterator`` whenever the object is iterated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-deserialize-arrayobject-with-iterator-class-ps;-this-class-is-not-derived-from-arrayiterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ArrayObject` can be constructed with a custom iterator class (via its second constructor argument), used in place of the default `ArrayIterator` whenever the object is iterated. That choice is preserved across `serialize()`/`unserialize()` by storing the iterator class name as part of the object's serialized state, and restored inside `ArrayObject::__unserialize()`.

Since that class name travels as a plain string inside the serialized payload, it can end up naming any class, including one with no relation to iteration at all, if the payload was tampered with or was produced by mismatched code. Since PHP 8.6, `ArrayObject::__unserialize()` requires the named class to actually extend `ArrayIterator`, and throws an `UnexpectedValueException` naming the class otherwise, rather than accepting any class that merely implements `Iterator`.

## Example

```php
<?php

$data = 'O:11:"ArrayObject":4:{i:0;i:0;i:1;a:0:{}i:2;a:0:{}i:3;s:8:"stdClass";}';

unserialize($data);

?>
```

## Literal Examples
+ Cannot deserialize ArrayObject with iterator class 'stdClass'; this class is not derived from ArrayIterator

## Alternatives
+ Only unserialize ArrayObject data that was produced by trusted code, and make sure any custom iterator class passed to ArrayObject's constructor extends ArrayIterator.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, the same UnexpectedValueException was thrown for a class that does not implement Iterator at all, with the message "Cannot deserialize ArrayObject with iterator class '%s'; this class does not implement the Iterator interface". PHP 8.6 tightened the requirement from merely implementing Iterator to actually extending ArrayIterator, and reworded the message to match.](Prior to PHP 8.6, the same UnexpectedValueException was thrown for a class that does not implement Iterator at all, with the message "Cannot deserialize ArrayObject with iterator class '%s'; this class does not implement the Iterator interface". PHP 8.6 tightened the requirement from merely implementing Iterator to actually extending ArrayIterator, and reworded the message to match.)