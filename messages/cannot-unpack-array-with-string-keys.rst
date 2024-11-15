.. _cannot-unpack-array-with-string-keys:

Cannot unpack array with string keys
------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot unpack array with string keys: Initialy, the ellipsis operator would only work with integer-indexed arrays, and not with string-indexed arrays.

Description
___________
 
Initialy, the ellipsis operator would only work with integer-indexed arrays, and not with string-indexed arrays. This feature was introduced in PHP 8.1, and the error message then disappeared.

Example
_______

.. code-block:: php

   <?php
   
   $array = ['a' => 1, 2];
   $array2 = [...$array, 3];
   
   ?>

Solutions
_________

+ Upgrade the code to PHP 8.1 or newer.
+ Use array_keys() before using the ellipsis operator.
