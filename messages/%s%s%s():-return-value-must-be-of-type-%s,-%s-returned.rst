.. _%s%s%s():-return-value-must-be-of-type-%s,-%s-returned:

%s%s%s(): Return value must be of type %s, %s returned
------------------------------------------------------
 
	.. meta::
		:description:
			%s%s%s(): Return value must be of type %s, %s returned: This error appears when calling a method with a return value, but without an explicit return statement.

		:og:type: article
		:og:title: %s%s%s(): Return value must be of type %s, %s returned
		:og:description: This error appears when calling a method with a return value, but without an explicit return statement
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%25s%25s%28%29%3A-return-value-must-be-of-type-%25s%2C-%25s-returned.html

Description
___________
 
This error appears when calling a method with a return value, but without an explicit return statement. This means that when the method reachs its end, eventually, it will end without a returned value. Yet, the method signature declares that it will return a specific type.

A different error message is returned when an empty ``return`` statement is used.


Example
_______

.. code-block:: php

   <?php
   
   function foo() : int {
       
   }
   
   ?>


Literal Examples
****************
+ foo(): Return value must be of type int, none returned

Solutions
_________

+ Add a return call, with a valid value.
+ Remove the return type.
+ Add a null to the return type, and return it (void is not possible with another type).

Related Error Messages
______________________

+ :ref:`a-function-with-return-type-must-return-a-value`
