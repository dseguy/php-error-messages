.. _cannot-declare-hooks-for-static-property:

Cannot declare hooks for static property
----------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot declare hooks for static property: Static properties cannot have a property hook.

Description
___________
 
Static properties cannot have a property hook. This feature is not supported. 

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public static string $property {
           set => $this->property . _1;
   
           SET {
               $this->property = $value;
           }
       }
   }
   ?>

Solutions
_________

+ Make the property non-static.
+ Create accessors for the static property.
