# The float %.*H is not representable as an int, cast occurred

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-float-%.*h-is-not-representable-as-an-int,-cast-occurred.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-float-%.*h-is-not-representable-as-an-int,-cast-occurred.html","name":"The float %.*H is not representable as an int, cast occurred","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:23:30 +0000","dateModified":"Sat, 25 Jul 2026 12:23:30 +0000","description":"When a ``float`` is cast to ``int`` -- explicitly with ``(int)``\/``intval()``, or implicitly wherever an integer is required, such as an array offset or a bitwise operator -- and the value is outside the range representable by ``PHP_INT_MIN``\/``PHP_INT_MAX``, or is ``NAN`` or ``INF``, PHP cannot produce a meaningful integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-float-%.*h-is-not-representable-as-an-int,-cast-occurred.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a `float` is cast to `int` -- explicitly with `(int)`/`intval()`, or implicitly wherever an integer is required, such as an array offset or a bitwise operator -- and the value is outside the range representable by `PHP_INT_MIN`/`PHP_INT_MAX`, or is `NAN` or `INF`, PHP cannot produce a meaningful integer.

Rather than silently returning an arbitrary or platform-dependent bit pattern, PHP emits this warning and returns `0` for `NAN`/`INF`, or a value obtained by taking the float modulo the 64-bit integer range for very large finite values -- in both cases, a value with no reliable relationship to the original float.

## Example

```php
<?php

var_dump((int) 1.0E+20);
// int(0) on 64-bit, and the value bears no relation to 1.0E+20

var_dump((int) NAN);
// int(0)

var_dump((int) INF);
// int(0)

?>
```

## Literal Examples
+ The float 1.0E+20 is not representable as an int, cast occurred
+ The float NAN is not representable as an int, cast occurred
+ The float INF is not representable as an int, cast occurred

## Alternatives
+ Check the float against ``PHP_INT_MIN``/``PHP_INT_MAX`` (and against ``is_nan()``/``is_infinite()``) before casting it.
+ Keep the value as a ``float`` or as a string if it may exceed the integer range.
+ Use ``BCMath`` or ``GMP`` if arbitrary-precision integers are required.

## Related error messages
+ [the-float-string--"%s-"-is-not-representable-as-an-int,-cast-occurred](the-float-string--%s--is-not-representable-as-an-int,-cast-occurred.html)
+ [implicit-conversion-from-float-%.*h-to-int-loses-precision](implicit-conversion-from-float-%.\*h-to-int-loses-precision.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()