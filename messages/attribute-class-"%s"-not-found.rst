.. _attribute-class-"%s"-not-found:

Attribute class "%s" not found
------------------------------
 
	.. meta::
		:description lang=en:
			Attribute class "%s" not found: This error reports that a class was not found.

Description
___________
 
This error reports that a class was not found. This is also focusing on attribute classes. 

Class are reported as not found when they are used, so this error message is displayed when the attribute is actually used in the code, by calling the ``getInstance`` reflection. An attribute might exists without its underlying class, as long as it is not instanciated.


Example
_______

.. code-block:: php

   <?php
   
   #[X] 
   function f() { }
   
   $ref = new \ReflectionFunction('\f');
   
   try {
       $ref->getAttributes()[0]->newInstance();
   } catch (\Error $e) {
       var_dump($e->getMessage());
   }
   ?>


Literal Examples
****************
+ Attribute class "Deprecated" not found

Solutions
_________

+ Check spelling and namespace for that class.
+ Create the associated class.
+ Avoid using getInstance() on that attribute.

Related Error Messages
______________________

+ :ref:`class-\"%s\"-not-found`
