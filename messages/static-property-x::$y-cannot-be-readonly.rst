.. _static-property-x::\$y-cannot-be-readonly:

Static property x::$y cannot be readonly
----------------------------------------
 
	.. meta::
		:description:
			Static property x::$y cannot be readonly: Static properties cannot be made readonly.

		:og:type: article
		:og:title: Static property x::$y cannot be readonly
		:og:description: Static properties cannot be made readonly
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/static-property-x%3A%3A%24y-cannot-be-readonly.html

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
