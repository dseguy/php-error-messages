.. _void-cannot-be-used-as-a-parameter-type:

void cannot be used as a parameter type
---------------------------------------
 
	.. meta::
		:description:
			void cannot be used as a parameter type: Void is a type, that can only be used with return type, on methods or functions.

		:og:type: article
		:og:title: void cannot be used as a parameter type
		:og:description: Void is a type, that can only be used with return type, on methods or functions
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/void-cannot-be-used-as-a-parameter-type.html

Description
___________
 
Void is a type, that can only be used with return type, on methods or functions. Here, void represents the absence of value: this is not possible for a property or an argument. The null value is then the closest possible type that can be assigned to a property, yet representing no value.

Example
_______

.. code-block:: php

   <?php
   
     function foo(void $p) { }
   
   ?>

Solutions
_________

+ Use another type for the argument.
+ Remove the argument.
+ Use the null type.

Related Error Messages
______________________

+ :ref:`property-x::$p-cannot-have-type-void`

See Also
________

+ `The three nothings of PHP <https://www.exakat.io/en/the-three-nothings-of-php/>`_
