.. _cannot-make-non-abstract-method-i::foo()-abstract-in-class-j:

Cannot make non abstract method i::foo() abstract in class j
------------------------------------------------------------
 
	.. meta::
		:description:
			Cannot make non abstract method i::foo() abstract in class j: It is not possible to make a method abstract if there is a concrete method of the same name in the parents.

		:og:type: article
		:og:title: Cannot make non abstract method i::foo() abstract in class j
		:og:description: It is not possible to make a method abstract if there is a concrete method of the same name in the parents
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-make-non-abstract-method-i%3A%3Afoo%28%29-abstract-in-class-j.html

Description
___________
 
It is not possible to make a method abstract if there is a concrete method of the same name in the parents. Convertir a method to an abstract one is not allowed.

On the other hand, it is possible to have a child abstract class, with a concrete parent.

Example
_______

.. code-block:: php

   <?php
   
   class i {
   	function foo() {} 
   }
   
   class j extends i {
   	abstract function foo();
   }
   
   
   ?>

Solutions
_________

+ Make the whole class abstract.
+ Remove the abstract from the method.
+ Export the method to an interface.
