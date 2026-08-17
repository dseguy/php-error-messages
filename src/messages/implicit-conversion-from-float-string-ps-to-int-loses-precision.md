# Implicit conversion from float-string "%s" to int loses precision

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-string-ps-to-int-loses-precision.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-string-ps-to-int-loses-precision.html","name":"Implicit conversion from float-string \"%s\" to int loses precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"Bitshift operators and bitwise operators work on integers, not on floats","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-string-ps-to-int-loses-precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Bitshift operators and bitwise operators work on integers, not on floats. When a string is provided, it may be converted to integer or float: in the second case, the deprecation warning is emitted.

The warning is not emitted when the conversion lands on an integer.

## Example

```php
<?php

// Extract from php-src/Zend/tests/float_to_int/warnings_string_float_literals.phpt
$var = '1.5'|3;
$var = '1.5'&3;
$var = '1.5'^3;
$var = '1.5' << 3;
$var = '1.5' >> 3;
$var = 3 << '1.5';
$var = 3 >> '1.5';

//OK : PHP is smart enough to round this to integer
((1 / 35) * 35) | 3;

//Implicit conversion from float 0.9999999999999999 to int loses precision 
//The rounding is not sufficient 
((1 / 35) * 7 * 5 ) | 3;

// valid, conversion gives an integer
$var = '14.00000000'|3;

// still valid, conversion does not handle 0.0000000000000001 precision
$var = '13.0000000000000001'|3;

?>
```

## Literal Examples
+ Implicit conversion from float-string "1.5" to int loses precision
+ Implicit conversion from float-string "0.9999999999999999" to int loses precision

## Alternatives
+ Cast the string to integer before using it with bitshift or bitwise operators.
+ Round the string to integer before using it with bitshift or bitwise operators.
+ Simplify the expressions before using it with bitshift or bitwise operators.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[implicitConversionToInt](implicitConversionToInt)