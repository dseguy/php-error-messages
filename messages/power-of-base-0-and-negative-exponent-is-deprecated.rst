.. _power-of-base-0-and-negative-exponent-is-deprecated:

Power of base 0 and negative exponent is deprecated
---------------------------------------------------
 
	.. meta::
		:description:
			Power of base 0 and negative exponent is deprecated: Requesting a negative exponent on 0 yields this error message.

		:og:type: article
		:og:title: Power of base 0 and negative exponent is deprecated
		:og:description: Requesting a negative exponent on 0 yields this error message
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/power-of-base-0-and-negative-exponent-is-deprecated.html

Description
___________
 
Requesting a negative exponent on 0 yields this error message. While PHP 8.3- used to generate INF as result, PHP 8.4 is moving toward generating a DivisionByZeroError: this will be set in PHP 9.0.

Example
_______

.. code-block:: php

   <?php
   
   $x = 0;
   
   $y = $x ** -2;
   
   ?>

Solutions
_________

+ Check for 0 before raising a negative power. Positive powers are OK.
+ Check for negative power before raising a power of 0.
+ Use the PHP 8.4 function fpow() that has the future behavior, with a try/catch structure.
