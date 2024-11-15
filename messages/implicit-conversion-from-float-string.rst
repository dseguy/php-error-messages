.. _implicit-conversion-from-float-string:

Implicit conversion from float-string "%s" to int loses precision
-----------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Implicit conversion from float-string "%s" to int loses precision: In cases where integers are required, PHP applies a type cast and convert floats and strings into integers.

Description
___________
 
In cases where integers are required, PHP applies a type cast and convert floats and strings into integers. In many cases, that conversion is eponymous, with 1.0 (float) or '10' being obviously converted to their integer equivalent. 

When the conversion is not flawless, in particular when there is a significant decimal part in the float number, this conversion is deleting a part of the value. This message is meant to raise awareness about it. 

Situations where this may happens are varied : index in arrays or strings, operators that works on integers, such as bitshift; logical and bitwise operators, etc.

This is a variation of the error 'A non-numeric value encountered', where the value could not be converted sanely to an integer.


Example
_______

.. code-block:: php

   <?php
   
   $a = ['1.23' => 3];
   
   ?>

Solutions
_________

+ Explicitly cast the value to integer.
+ Check if the value is an integer before usage.

Related Error Messages
______________________

+ :ref:`a-non-numeric-value-encountered`
