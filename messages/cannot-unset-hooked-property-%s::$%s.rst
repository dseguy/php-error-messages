.. _cannot-unset-hooked-property-%s::\$%s:

Cannot unset hooked property %s::$%s
------------------------------------
 
	.. meta::
		:description:
			Cannot unset hooked property %s::$%s: It is not allowed to unset a hooked property, aka, a property with a ``get`` or ``set`` (or both) hook.

		:og:type: article
		:og:title: Cannot unset hooked property %s::$%s
		:og:description: It is not allowed to unset a hooked property, aka, a property with a ``get`` or ``set`` (or both) hook
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unset-hooked-property-%25s%3A%3A%24%25s.html

Description
___________
 
It is not allowed to unset a hooked property, aka, a property with a ``get`` or ``set`` (or both) hook. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public string $property {
           get => $this->x;
       }
   }
   
   $x = new X;
   unset($x->x);
   
   ?>
   


Literal Examples
****************
+ Cannot unset hooked property x::$property

Solutions
_________

+ Assign null, or a null value to this property.
+ Reset the property to its default value.
