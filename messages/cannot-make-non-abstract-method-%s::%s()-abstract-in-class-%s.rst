.. _cannot-make-non-abstract-method-%s::%s()-abstract-in-class-%s:

Cannot make non abstract method %s::%s() abstract in class %s
-------------------------------------------------------------
 
	.. meta::
		:description:
			Cannot make non abstract method %s::%s() abstract in class %s: Once a method has a body, it cannot be made ``abstract`` again.

		:og:type: article
		:og:title: Cannot make non abstract method %s::%s() abstract in class %s
		:og:description: Once a method has a body, it cannot be made ``abstract`` again
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-make-non-abstract-method-%25s%3A%3A%25s%28%29-abstract-in-class-%25s.html

Description
___________
 
Once a method has a body, it cannot be made ``abstract`` again. 

On the other hand, the child class may be abstract, while the parent class is not. It just means that new methods must be implemented.


Example
_______

.. code-block:: php

   <?php
   
   class x {
       function foo() {}
   }
   
   abstract class y extends x {
       abstract function foo();
   }
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Make the child class the parent.
+ Change the name of the abstract method in the child class.
+ Remove the abstract option in the child class.
+ Add the abstract option in the parent class.
+ Make the method abstract in the parent class.
