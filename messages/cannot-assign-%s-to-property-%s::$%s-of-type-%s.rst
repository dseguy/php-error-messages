.. _cannot-assign-%s-to-property-%s::\$%s-of-type-%s:

Cannot assign %s to property %s::$%s of type %s
-----------------------------------------------
 
	.. meta::
		:description:
			Cannot assign %s to property %s::$%s of type %s: This error signals that the wrong type was used when assigning values to a property.

		:og:type: article
		:og:title: Cannot assign %s to property %s::$%s of type %s
		:og:description: This error signals that the wrong type was used when assigning values to a property
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-assign-%25s-to-property-%25s%3A%3A%24%25s-of-type-%25s.html

Description
___________
 
This error signals that the wrong type was used when assigning values to a property.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public int $property;
   }
   
   $x = new X;
   $x->property = 'de';
   
   ?>


Literal Examples
****************
+ Cannot assign string to property X::$property of type int

Solutions
_________

+ Add the type of this value to the type description.
+ Remove the type on the property.
+ Cast the value to the correct type.
