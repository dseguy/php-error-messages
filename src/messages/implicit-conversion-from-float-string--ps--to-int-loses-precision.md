# Implicit conversion from float-string \"%s\" to int loses precision

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-string--ps--to-int-loses-precision.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-string--ps--to-int-loses-precision.html","name":"Implicit conversion from float-string \\\"%s\\\" to int loses precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T07:04:35+00:00","dateModified":"2026-09-24T07:04:35+00:00","description":"In weak typing mode (the default), a string argument passed where an ``int`` parameter is declared is coerced automatically, provided the string is numeric","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-string--ps--to-int-loses-precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In weak typing mode (the default), a string argument passed where an `int` parameter is declared is coerced automatically, provided the string is numeric. When that string looks like a float rather than an integer -- e.g. `'1.5'` -- PHP still coerces it, by first converting it to a `float` and then truncating that float to an `int`, silently discarding the fractional part.

As of PHP 8.1, this specific case -- a *float-shaped string* being coerced down to an int and losing precision in the process -- emits a deprecation notice. It is a sibling of the same underlying helper that also fires for float array keys and for bitwise/bitshift operators applied to float-like strings, which are documented separately since they are different call sites in practice.

## Example

```php
<?php

function double(int $x) {
    return $x * 2;
}

// Weak typing lets a numeric string be passed where an int is
// declared, but '1.5' cannot become an int without losing the .5.
var_dump(double('1.5'));

?>
```

## Literal Examples
+ Implicit conversion from float-string "1.5" to int loses precision

## Alternatives
+ Round or cast the value explicitly before calling the function: double((int) round((float) $x)).
+ Declare the parameter as int|float and handle both cases inside the function.
+ Validate the input is an integer-shaped string (e.g. with ctype_digit()) before relying on implicit coercion.

## Related error messages
+ [implicit-conversion-from-float-string-"%s"-to-int-loses](implicit-conversion-from-float-string-%s-to-int-loses.html)
+ [implicit-conversion-from-float-string-"%s"-to-int-loses-precision](implicit-conversion-from-float-string-%s-to-int-loses-precision.html)
+ [implicit-conversion-from-float-%.*h-to-int-loses-precision](implicit-conversion-from-float-%.\*h-to-int-loses-precision.html)

## Related error messages
+ [PHP RFC: Deprecate implicit non-integer-compatible float to int conversions](https://wiki.php.net/rfc/implicit-float-int-deprecate)
+ [Type coercion manual](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[implicitConversionToInt](implicitConversionToInt)