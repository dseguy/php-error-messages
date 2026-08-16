# must be a valid rounding mode (RoundingMode::\*)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-rounding-mode-(roundingmode::*).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-rounding-mode-(roundingmode::*).html","name":"must be a valid rounding mode (RoundingMode::\\*)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-22T21:33:22+02:00","dateModified":"2025-02-16T14:12:48-05:00","description":"PHP has 4 rounding modes, to be used with the round() native function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-rounding-mode-(roundingmode::*).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP has 4 rounding modes, to be used with the round() native function. They are PHP_ROUND_HALF_UP, PHP_ROUND_HALF_DOWN, PHP_ROUND_HALF_EVEN, PHP_ROUND_HALF_ODD; there is also `RoundingMode` and its cases : RoundingMode::HalfAwayFromZero, RoundingMode::HalfTowardsZero, RoundingMode::HalfEven, RoundingMode::HalfOdd, RoundingMode::TowardsZero, RoundingMode::AwayFromZero, RoundingMode::NegativeInfinity, RoundingMode::PositiveInfinity.

Any value that is not typed `RoundingMode` or is typed `int` but outside the 4 supported values and the default behavior of 0, produces this error message. In particular, false and null are not 

Although the error message recommends using RoundingMode, the historical PHP_ROUND_* are still valid. It might be wise to start migrating to the new enumeration.

The GMP rounding function (via `gmp_div_q()`) works as previously. BCmath has no rounding function.

## Example

```php
<?php

// Generates the error
print $a = round(1.2, 2, 333);

// Generates the error
print $a = round(1.2, 2, 0);

// Generates the error
print $a = round(1.2, 2, false);

?>
```

## Alternatives
+ Use a valid enum case to configure the round() function.
+ Use a valid PHP_ROUND_* constant to configure the round() function.
+ Remove the 3rd parameter altogether: this means using PHP_ROUND_HALF_UP.
