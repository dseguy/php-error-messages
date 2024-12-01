.. _division-of-php_int_min-by--1-is-not-an-integer:

Division of PHP_INT_MIN by -1 is not an integer
-----------------------------------------------
 
	.. meta::
		:description:
			Division of PHP_INT_MIN by -1 is not an integer: In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer.

		:og:type: article
		:og:title: Division of PHP_INT_MIN by -1 is not an integer
		:og:description: In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/division-of-php_int_min-by--1-is-not-an-integer.html

Description
___________
 
In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer. 

In fact, ``- PHP_INT_MIN = PHP_INT_MAX + 1``: PHP_INT_MIN is larger than PHP_INT_MAX, in absolute value. It implies that multiplying, or dividing it by -1, cannot be represented as a integer. 

Since the ``intdiv()`` has a return type of ``int``, returning a float is not possible. Hence, the specific error. 

Any other argument is valid, as it will be within the range of the integers. 

Last, using the ``/`` operator works, since the operator doesn't have a return type.

Example
_______

.. code-block:: php

   <?php
   
   intdiv(PHP_MIN_INT, -1);
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Check both operands before feeding them to the intdiv() function.
+ Use ``/``, and then check if it is an integer or not.
+ Convert the values to float, and then, convert the result of the division to integer.
