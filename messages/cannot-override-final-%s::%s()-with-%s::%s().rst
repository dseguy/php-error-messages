.. _cannot-override-final-%s::%s()-with-%s::%s():

Cannot override final %s::%s() with %s::%s()
--------------------------------------------
 
	.. meta::
		:description:
			Cannot override final %s::%s() with %s::%s(): The ``final`` keyword prevents any child class to define the same constant or method.

		:og:type: article
		:og:title: Cannot override final %s::%s() with %s::%s()
		:og:description: The ``final`` keyword prevents any child class to define the same constant or method
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-override-final-%25s%3A%3A%25s%28%29-with-%25s%3A%3A%25s%28%29.html

Description
___________
 
The ``final`` keyword prevents any child class to define the same constant or method. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	final const A = 1;
   	
   	final function foo() {}
   }
   
   class y extends x {
   	const A = 1;
   	
   	function foo() {}
   }
   
   ?>


Literal Examples
****************
+ Cannot override final x::foo() with y::foo()

Solutions
_________

+ Remove the final option in the parent class.
+ Rename the non-final constant or method in the child class.
