.. _cannot-use-a-scalar-value-as-an-array:

Cannot use a scalar value as an array
-------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot use a scalar value as an array: Scalar values cannot be modified with the array syntax: for example, it makes no sense to modify the third indexed element on an integer.

Description
___________
 
Scalar values cannot be modified with the array syntax: for example, it makes no sense to modify the third indexed element on an integer.

The error message is a bit misleading, as strings are allowed to be manipulated that way: some scalar values are allowed. Arrays are, of course, allowed, and for objects, it depends if the class implements ArrayAccess or not. 

This error message is used with write context. There is an equivalent error message for reading.

Example
_______

.. code-block:: php

   <?php
   
   $a = 123;
   $a[3] = 2;
   
   $b = true;
   $a[3] = 4;
   
   ?>

Solutions
_________

+ Cast the value to a string.
+ Cast the value to an array.
+ Use a better suited operator than this one.
+ Test the type before using the array syntax on the value.
