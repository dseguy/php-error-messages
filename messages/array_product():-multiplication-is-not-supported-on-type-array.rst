.. _array_product():-multiplication-is-not-supported-on-type-array:

array_product(): Multiplication is not supported on type array
--------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			array_product(): Multiplication is not supported on type array: array_product() multiplies each element in the first argument, with each other.

Description
___________
 
array_product() multiplies each element in the first argument, with each other. This is a valid operation for integer, floats, numeric strings, booleans and null, as they can be cast to numbers. 

This is not the case for arrays, objects, non-numeric strings or resources, which yield this warning, and are omitted in the operation.

Until PHP 8.3, the omission of invalid argument was a silent behavior.


Example
_______

.. code-block:: php

   <?php
   
   var_dump(array_product([[]] )); // returns 1
   
   var_dump(array_product([[], 3] )); // returns 3
   
   ?>

Solutions
_________

+ Filter out all values in the first argument not actually numeric: aka, they can't be cast to integer or float without error.
+ Filter out all arrays inside the first argument.

Related Error Messages
______________________

+ :ref:`array_product():-multiplication-is-not-supported-on-type-object`
+ :ref:`array_product():-multiplication-is-not-supported-on-type-string`
