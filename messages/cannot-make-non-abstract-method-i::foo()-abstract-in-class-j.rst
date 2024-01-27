Cannot make non abstract method i::foo() abstract in class j
------------------------------------------------------------
 
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
