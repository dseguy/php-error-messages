# Value of type %s is not callable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/value-of-type-ps-is-not-callable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/value-of-type-ps-is-not-callable.html","name":"Value of type %s is not callable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-27T19:00:56+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"There was an attempt to call a function whose name was provided in a variable, but that value could not be related to a callable code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/value-of-type-ps-is-not-callable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
There was an attempt to call a function whose name was provided in a variable, but that value could not be related to a callable code. 

+ `null` : not a callable
+ `true`, `false` : booleans are not callable
+ `int` : integers are not callable
+ `float` : float are not callable
+ `array` : arrays are callable when they have two elements, with keys 0 and 1. First one is a class or an object of that class, the second is a string with a visible method name on that class. Otherwise, they are not valid callables.
+ `string` : strings are callable when they represent a function, with the leading backslash, `\strlen`, or a method, with a class name, a double colon `::`, and a visible method name. Otherwise, they are not valid callables.
+ `object` : object are callable when their class has a `__invoke` method. This might be through a parent, like `Closure`. Otherwise, objects are not callable, although their method are.

All of these may be checked with a call to `is_callable()` on the variable, before using it.

## Example

```php
<?php

$method = null;
$method();

?>
```

## Literal Examples
+ Value of type int is not callable
+ Value of type bool is not callable
+ Value of type string is not callable
+ Value of type float is not callable

## Alternatives
+ Check the variable with ``is_callable()``, before using it with the call syntax.
+ Use one of the available format.

## Related error messages
+ [object-of-type-%s-is-not-callable](object-of-type-%s-is-not-callable.html)
