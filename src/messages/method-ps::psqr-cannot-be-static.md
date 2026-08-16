# Method %s::%s() cannot be static

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::%s()-cannot-be-static.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::%s()-cannot-be-static.html","name":"Method %s::%s() cannot be static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-01T10:07:29+01:00","dateModified":"2026-07-13T20:51:12+02:00","description":"Some PHP special methods cannot be static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::%s()-cannot-be-static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Some PHP special methods cannot be static. This is the case of all the PHP magic methods, such as the constructor `__construct`, the destructor `__destruct`, and all the others: `__call()`, `__callStatic()`, `__get()`, `__set()`, `__isset()`, `__unset()`, `__sleep()`, `__wakeup()`, `__serialize()`, `__unserialize()`, `__toString()`, `__invoke()`, `__set_state()`, `__clone()` and `__debugInfo()`.

## Example

```php
<?php

class X {
	static function __construct() {}
}

?>
```

## Literal Examples
+ Method x::__construct() cannot be static

## Alternatives
+ Make a static method that can call the method that would be static. Be aware, this will require the building of an object, as a static method does not set ``$this``.

## Related error messages
+ [returning-null-from-%s::__debuginfo()-is-deprecated,-return-an-empty-array-instead](returning-null-from-%s::\_\_debuginfo\(\)-is-deprecated,-return-an-empty-array-instead.html)
