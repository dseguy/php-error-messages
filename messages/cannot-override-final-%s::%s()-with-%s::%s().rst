.. _cannot-override-final-%s::%s()-with-%s::%s():

Cannot override final %s::%s() with %s::%s()
--------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot override final %s::%s() with %s::%s(): The ``final`` keyword prevents any child class to define the same constant or method.

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

Solutions
_________

+ Remove the final option in the parent class.
+ Rename the non-final constant or method in the child class.
