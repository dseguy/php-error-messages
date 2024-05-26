.. _cannot-acquire-reference-to-readonly-property:

Cannot acquire reference to readonly property 
----------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot acquire reference to readonly property : It is not possible to create a reference to a readonly property.

Description
___________
 
It is not possible to create a reference to a readonly property. The property is readonly and cannot be changed. On the other hand, references are never readonly, and provide read and write access to the data. PHP has no way to check that the reference is readonly. Hence, references on readonly properties are not allowed.

Example
_______

.. code-block:: php

   <?php
   
   class Test {
       public readonly int $prop;
   
       public function init() {
           $this->prop = 1;
       }
   }
   
   $test = new Test;
   $test->init();
   
   try {
       foreach ($test as &$prop) {}
   } catch (Error $e) {
       echo $e->getMessage(), \n;
   }
   
   ?>

Solutions
_________

+ Remove the readonly option on the property.
+ Remove the reference to the property.
