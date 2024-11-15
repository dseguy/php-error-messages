.. _unsupported-operand-types:

Unsupported operand types
-------------------------
 
	.. meta::
		:description:
			Unsupported operand types: This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator.

		:og:type: article
		:og:title: Unsupported operand types
		:og:description: This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/unsupported-operand-types.html

Description
___________
 
This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator. 

In the code example, the string 'a4.4a' cannot be converted to an integer or a float. This yield the error. 

PHP could do with '4.4a' (cast to 4.4 and a warning), or with '4.4' (cast to a float silently). 

On the other hand, the 'a4.4a' string cannot be converted to a numeric and it yields the error. Other types, such as an array, an object or a resource would yield the same error. Boolean and null are converted to integers.

This error applies to all operators, with matching constraints. 

Conversion to string my be automatically happening, when the strict_typing is not active. 

The error is reported for the first or the second argument. It may also applies to both, though PHP stops at the first one it finds.


Example
_______

.. code-block:: php

   <?php
   
   echo a4.4a ** 4;
   
   ?>

Solutions
_________

+ Use an explicit cast to ensure the correct type of the operand.
+ Check the value before using it with the operator.

Related Error Messages
______________________

+ :ref:`a-non-numeric-value-encountered`
