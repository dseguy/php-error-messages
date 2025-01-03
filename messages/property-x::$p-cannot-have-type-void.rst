.. _property-x::\$p-cannot-have-type-void:

Property x::$p cannot have type void
------------------------------------
 
	.. meta::
		:description:
			Property x::$p cannot have type void: Void is a type, that can only be used with return type, on methods or functions.

		:og:type: article
		:og:title: Property x::$p cannot have type void
		:og:description: Void is a type, that can only be used with return type, on methods or functions
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-x%3A%3A%24p-cannot-have-type-void.html

Description
___________
 
Void is a type, that can only be used with return type, on methods or functions. Here, void represents the absence of value: this is not possible for a property or an argument. The null value is then the closest possible type that can be assigned to a property, yet representing no value. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private void $property;
   }
   
   ?>

Solutions
_________

+ Use another type for the property.
+ Remove the property.
+ Use the null type.

Related Error Messages
______________________

+ :ref:`void-cannot-be-used-as-a-parameter-type`

See Also
________

+ `The three nothings of PHP <https://www.exakat.io/en/the-three-nothings-of-php/>`_
