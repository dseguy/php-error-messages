Return value must be of type int, string returned
-------------------------------------------------
 
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
