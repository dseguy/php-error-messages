.. _return-value-must-be-of-type-int,-string-returned:

Return value must be of type int, string returned
-------------------------------------------------
 
	.. meta::
		:description:
			Return value must be of type int, string returned: The type of the returned value must match the type of the method signature.

		:og:type: article
		:og:title: Return value must be of type int, string returned
		:og:description: The type of the returned value must match the type of the method signature
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/return-value-must-be-of-type-int%2C-string-returned.html

Description
___________
 
The type of the returned value must match the type of the method signature. 

With strict_types, PHP refuses anything that is not compatible with the returned type: returning '123' (123 as a string), or 123.00 (123 as float) is forbidden. 

Without strict_types, PHP tries to convert the value to int, and only produces an error when it cannot.


Example
_______

.. code-block:: php

   <?php
   
   function foo() : int {
   	return 'abc';
   }
   ?>

Solutions
_________

+ Use a cast to force the type to the desired returntype.
+ Check the type before returning it.
+ Remove the return type.
+ Remove strict_types.

Related Error Messages
______________________

+ :ref:`a-function-with-return-type-must-return-a-value`
