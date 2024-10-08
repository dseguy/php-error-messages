.. _attempt-to-unset-static-property-a::$x:

Attempt to unset static property X::$x
--------------------------------------
 
	.. meta::
		:description lang=en:
			Attempt to unset static property X::$x: It is not possible to unset a static property.

Description
___________
 
It is not possible to unset a static property.

This applies to typed and not typed static properties. It also only applies to static properties that are already set, such as in the illustration: PHP complains about uninitialized state first, and later, about removing static properties.

This does not apply to properties, which may be removed.

Example
_______

.. code-block:: php

   <?php
   
   class x {
       public static $y = 1;
       public static int $z;
   }
   
   //Attempt to unset static property A::$x
   unset(x::$y);
   
   //Attempt to unset static property x::$z
   unset(x::$z);
   x::$z = 2;
   //Attempt to unset static property A::$x
   unset(x::$z);
   
   
   ?>

Solutions
_________

+ Set the property to null.
+ Set the property to a value that represents removal.

Related Error Messages
______________________

+ :ref:`typed-property-%s::$%s-must-not-be-accessed-before-initialization`
+ :ref:`typed-static-property-%s::$%s-must-not-be-accessed-before-initialization`
