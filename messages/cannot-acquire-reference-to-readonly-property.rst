.. _cannot-acquire-reference-to-readonly-property:

Cannot acquire reference to readonly property 
----------------------------------------------
 
	.. meta::
		:description:
			Cannot acquire reference to readonly property : It is not possible to create a reference to a readonly property.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot acquire reference to readonly property 
		:og:description: It is not possible to create a reference to a readonly property
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-acquire-reference-to-readonly-property.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot acquire reference to readonly property 
	:twitter:description: Cannot acquire reference to readonly property : It is not possible to create a reference to a readonly property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
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
