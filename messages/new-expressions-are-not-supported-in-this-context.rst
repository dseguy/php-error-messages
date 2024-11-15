.. _new-expressions-are-not-supported-in-this-context:

New expressions are not supported in this context
-------------------------------------------------
 
	.. meta::
		:description:
			New expressions are not supported in this context: It is not possible to use directly an object as value for a class constant.

		:og:type: article
		:og:title: New expressions are not supported in this context
		:og:description: It is not possible to use directly an object as value for a class constant
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/new-expressions-are-not-supported-in-this-context.html

Description
___________
 
It is not possible to use directly an object as value for a class constant.

It is also not allowed to use an object as default value for properties, static or not. 

On the other hand, it is possible to use an object stored in a global constant. And, since it is possible to use a global constant as a value for a class constant, it is easy to work around this limitation. The same trick is possible with properties, as long as the target object is not self.

Properties cannot use their host class as default values: it leads to a chicken and egg problem. The global constant must be created with an object of the class, which is then immediately instantiated with a default value based on the global constant.


Example
_______

.. code-block:: php

   <?php
   
   class B {}
   
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
