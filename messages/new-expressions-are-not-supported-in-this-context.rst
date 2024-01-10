New expressions are not supported in this context
-------------------------------------------------
 
Description
___________
 
It is not possible to use directly an object as value for a class constant.

On the other hand, it is possible to use an object in a global constant. And, since it is possible to use a global constant as a value for a class constant, it is easy to work around this limitation.

Example
_______

.. code-block:: php

   <?php
   
   const CONSTANT_B = new B;
   
   class x {
   	// This is not possible
   	const A = new B;
   
   	// This is possible, with the same result
   	const A2 = CONSTANT_B;
   }
   
   ?>

Solutions
_________

+ Remove the constant A.
+ Create a global constant, and assign it to A.
+ Make the constant a property.
+ Create a global constant, and assign it to the class constant.
