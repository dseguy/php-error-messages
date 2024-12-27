.. _exponent-cannot-have-a-fractional-part:

exponent cannot have a fractional part
--------------------------------------
 
	.. meta::
		:description:
			exponent cannot have a fractional part: The exponent argument, aka the second, must be an integer value.

		:og:type: article
		:og:title: exponent cannot have a fractional part
		:og:description: The exponent argument, aka the second, must be an integer value
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/exponent-cannot-have-a-fractional-part.html

Description
___________
 
The exponent argument, aka the second, must be an integer value. It might be negative, or even zero, but it cannot be with a decimal separator.

PHP tries to round it, so float values with only zeros after the decimal separator may work.

Example
_______

.. code-block:: php

   <?php
   
   echo bcpow('4.2', '3.2', 2); // 74.08
   
   ?>

Solutions
_________

+ Check the argument with ``is_int()``.
+ Round the argument to an integer.
