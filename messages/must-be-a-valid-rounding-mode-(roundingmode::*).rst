.. _must-be-a-valid-rounding-mode-(roundingmode::*):

must be a valid rounding mode (RoundingMode::\*)
------------------------------------------------
 
.. meta::
	:description:
		must be a valid rounding mode (RoundingMode::\*): PHP has 4 rounding modes, to be used with the round() native function.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be a valid rounding mode (RoundingMode::\*)
	:og:description: PHP has 4 rounding modes, to be used with the round() native function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-rounding-mode-%28roundingmode%3A%3A%2A%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be a valid rounding mode (RoundingMode::\*)
	:twitter:description: must be a valid rounding mode (RoundingMode::\*): PHP has 4 rounding modes, to be used with the round() native function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-rounding-mode-(roundingmode::*).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-rounding-mode-(roundingmode::*).html","name":"must be a valid rounding mode (RoundingMode::\\*)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP has 4 rounding modes, to be used with the round() native function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-rounding-mode-(roundingmode::*).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
