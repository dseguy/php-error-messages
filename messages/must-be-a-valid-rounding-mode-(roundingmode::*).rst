.. _must-be-a-valid-rounding-mode-(roundingmode::*):

must be a valid rounding mode (RoundingMode::*)
-----------------------------------------------
 
	.. meta::
		:description lang=en:
			must be a valid rounding mode (RoundingMode::*): PHP has 4 rounding modes, to be used with the round() native function.

Description
___________
 
PHP has 4 rounding modes, to be used with the round() native function. They are PHP_ROUND_HALF_UP, PHP_ROUND_HALF_DOWN, PHP_ROUND_HALF_EVEN, PHP_ROUND_HALF_ODD; there is also ``RoundingMode`` and its cases : RoundingMode::HalfAwayFromZero, RoundingMode::HalfTowardsZero, RoundingMode::HalfEven, RoundingMode::HalfOdd, RoundingMode::TowardsZero, RoundingMode::AwayFromZero, RoundingMode::NegativeInfinity, RoundingMode::PositiveInfinity.

Any value that is not typed ``RoundingMode`` or is typed ``int`` but outside the 4 supported values and the default behavior of 0, produces this error message. In particular, false and null are not 

Although the error message recommends using RoundingMode, the historical PHP_ROUND_* are still valid. It might be wise to start migrating to the new enumeration.

The GMP rounding function (via ``gmp_div_q()``) works as previously. BCmath has no rounding function.

Example
_______

.. code-block:: php

   <?php
   
   // Generates the error
   print $a = round(1.2, 2, 333);
   
   // Generates the error
   print $a = round(1.2, 2, 0);
   
   // Generates the error
   print $a = round(1.2, 2, false);
   
   ?>

Solutions
_________

+ Use a valid enum case to configure the round() function.
+ Use a valid PHP_ROUND_* constant to configure the round() function.
+ Remove the 3rd parameter altogether: this means using PHP_ROUND_HALF_UP.
