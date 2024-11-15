.. _static-property-x::\$y-cannot-be-readonly:

Static property x::$y cannot be readonly
----------------------------------------
 
	.. meta::
		:description lang=en:
			Static property x::$y cannot be readonly: Static properties cannot be made readonly.

Description
___________
 
Static properties cannot be made readonly. Only properties can be readonly.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	static readonly int $y;
   }
   
   ?>

Solutions
_________

+ Remove the readonly option on that property.
+ Make the property non-static .
