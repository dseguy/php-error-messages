# Implicit conversion from float-string "%s" to int loses precision

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-string-ps-to-int-loses.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-string-ps-to-int-loses.html","name":"Implicit conversion from float-string \"%s\" to int loses precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"In cases where integers are required, PHP applies a type cast and convert floats and strings into integers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-string-ps-to-int-loses.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In cases where integers are required, PHP applies a type cast and convert floats and strings into integers. In many cases, that conversion is eponymous, with 1.0 (float) or '10' being obviously converted to their integer equivalent. 

When the conversion is not flawless, in particular when there is a significant decimal part in the float number, this conversion is deleting a part of the value. This message is meant to raise awareness about it. 

Situations where this may happens are varied : index in arrays or strings, operators that works on integers, such as bitshift; logical and bitwise operators, etc.

This is a variation of the error 'A non-numeric value encountered', where the value could not be converted sanely to an integer.

## Example

```php
<?php

$a = [1.23 => 3];

?>
```

## Literal Examples
+ Implicit conversion from float-string "1.23" to int loses

## Alternatives
+ Explicitly cast the value to integer.
+ Check if the value is an integer before usage.

## Related error messages
+ [a-non-numeric-value-encountered](a-non-numeric-value-encountered.html)
+ [a-non-well-formed-numeric-value-encountered](a-non-well-formed-numeric-value-encountered.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[implicitConversionToInt](implicitConversionToInt)