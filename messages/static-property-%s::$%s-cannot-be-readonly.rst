.. _static-property-%s::\$%s-cannot-be-readonly:

Static property %s::$%s cannot be readonly
------------------------------------------
 
	.. meta::
		:description:
			Static property %s::$%s cannot be readonly: Static properties cannot use the readonly option.

		:og:type: article
		:og:title: Static property %s::$%s cannot be readonly
		:og:description: Static properties cannot use the readonly option
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/static-property-%25s%3A%3A%24%25s-cannot-be-readonly.html

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


Literal Examples
****************
+ Static property X::$property cannot be readonly

Solutions
_________

+ Remove the readonly option.
+ Turn the static property into a normal property.
