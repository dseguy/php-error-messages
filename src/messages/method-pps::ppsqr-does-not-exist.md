# Method %pS::%pS() does not exist

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-pps::ppsqr-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-pps::ppsqr-does-not-exist.html","name":"Method %pS::%pS() does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T15:47:44+00:00","dateModified":"2026-09-18T15:47:44+00:00","description":"The ``ReflectionMethod`` constructor requires the name of a method that actually exists on the given class (or object)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-pps::ppsqr-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `ReflectionMethod` constructor requires the name of a method that actually exists on the given class (or object). When no such method is declared, either directly on the class or via one of its parents, traits or interfaces, the Reflection API cannot build the requested introspection object and throws a `ReflectionException` instead.

## Example

```php
<?php

class X {}

$reflection = new ReflectionMethod('X', 'doesNotExist');

?>
```

## Literal Examples
+ Method X::doesNotExist() does not exist

## Alternatives
+ Check the method name for typos, including its case.
+ Use ``method_exists()`` or ``ReflectionClass::hasMethod()`` to check the method is available before reflecting on it.

## Related error messages
+ [function-%ps()-does-not-exist](function-%ps\(\)-does-not-exist.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()