.. _property-with-asymmetric-visibility-%s::\$%s-must-have-type:

Property with asymmetric visibility %s::$%s must have type
----------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Property with asymmetric visibility %s::$%s must have type: Asymmetric visibility, such as ``protected(set)`` only applies to a typed property.

Description
___________
 
Asymmetric visibility, such as ``protected(set)`` only applies to a typed property.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	static protected(set) int $q;
   }
   
   ?>

Solutions
_________

+ Remove the asymmetric property.
+ Add a type to the property.
