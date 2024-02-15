.. _attempt-to-unset-static-property:

Attempt to unset static property
--------------------------------
 
	.. meta::
		:description lang=en:
			Attempt to unset static property: It is not possible to unset a static property.

Description
___________
 
It is not possible to unset a static property. The best solution is to set it to null.

The property might be not set: this happens between the definition of the property, and its first assignation. But once set, that property cannot be unset.

On the other hand, it is possible to unset a property. This usually leads to confusion.


Example
_______

.. code-block:: php

   <?php
   
   class x {
       static $y = 1;
   }
   
   unset(x::$y);
   
   ?>

Solutions
_________

+ Set the static property the NULL value.
+ Use another property to mark this one as unset.
+ Convert the property to an object, that can be unset.
+ Use an array in that property, and unset one of its element.
