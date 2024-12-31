.. _property-with-asymmetric-visibility-%s::\$%s-must-have-type:

Property with asymmetric visibility %s::$%s must have type
----------------------------------------------------------
 
	.. meta::
		:description:
			Property with asymmetric visibility %s::$%s must have type: Asymmetric visibility, such as ``protected(set)`` only applies to a typed property.

		:og:type: article
		:og:title: Property with asymmetric visibility %s::$%s must have type
		:og:description: Asymmetric visibility, such as ``protected(set)`` only applies to a typed property
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-with-asymmetric-visibility-%25s%3A%3A%24%25s-must-have-type.html

Description
___________
 
Asymmetric visibility, such as ``protected(set)`` only applies to a typed property.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	static protected(set) int $property;
   }
   
   ?>


Literal Examples
****************
+ Property with asymmetric visibility x::$property must have type

Solutions
_________

+ Remove the asymmetric property.
+ Add a type to the property.
