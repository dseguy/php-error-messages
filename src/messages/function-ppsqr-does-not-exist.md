# Function %pS() does not exist

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-ppsqr-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-ppsqr-does-not-exist.html","name":"Function %pS() does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T18:50:34+02:00","dateModified":"2026-09-18T18:50:34+02:00","description":"The ``ReflectionFunction`` constructor requires the name of an existing user-defined or internal function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-ppsqr-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `ReflectionFunction` constructor requires the name of an existing user-defined or internal function. When the given name does not match any declared function, the Reflection API cannot build the requested introspection object and throws a `ReflectionException` instead.

## Example

```php
<?php

$reflection = new ReflectionFunction('does_not_exist');

?>
```

## Literal Examples
+ Function does_not_exist() does not exist

## Alternatives
+ Check the function name for typos.
+ Make sure any file declaring the function has been included before creating the ``ReflectionFunction``.
+ Use ``function_exists()`` to check the function is available before reflecting on it.

## Related error messages
+ [method-%ps::%ps()-does-not-exist](method-%ps::%ps\(\)-does-not-exist.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()