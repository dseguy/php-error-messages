.. _array-to-string-conversion:

Array to string conversion
--------------------------
 
	.. meta::
		:description lang=en:
			Array to string conversion: This error appears when an array is converted into a string, without a proper type cast.

Description
___________
 
This error appears when an array is converted into a string, without a proper type cast. For example, in the illustration code, the array is directly used with ``echo``, which requires a string, as argument. The result of this expression is ``Array``.

This error may be a sub-part of other operations, that also requires strings. This is the second example, with ``implode()`` : the source of the error lies in the elements of the array. They are supposed to be strings, so as to be concatenated with the separator; but one of them is also an array, leading to the error.

This error is not affected by ``strict_types``: it is always emits the same error.


Example
_______

.. code-block:: php

   <?php
   
   echo ['a'];
   
   echo implode(',', [1, 2, ['c']]);
   
   ?>

Solutions
_________

+ Convert the array to a string first.
+ Extract one (or more) entries from the array, as long as they are strings.
+ Force the array to a string with cast (although it will produce the ``Array`` string).
+ Use a method that accept strings and arrays.

See Also
________

+ `How to Fix the PHP Warning: Array to string conversion error in PHP <https://www.sourcecodester.com/article/16555/how-fix-php-warning-array-string-conversion-error-php.html>`_
