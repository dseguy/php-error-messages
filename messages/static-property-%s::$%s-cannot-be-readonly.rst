.. _static-property-%s::$%s-cannot-be-readonly:

Static property %s::$%s cannot be readonly
------------------------------------------
 
	.. meta::
		:description lang=en:
			Static property %s::$%s cannot be readonly: Static properties cannot use the readonly option.

Description
___________
 
Static properties cannot use the readonly option. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public static readonly int $property;
   }
   
   ?>

Solutions
_________

+ Remove the readonly option.
+ Turn the static property into a normal property.
