.. _class-declarations-may-not-be-nested:

Class declarations may not be nested
------------------------------------
 
	.. meta::
		:description lang=en:
			Class declarations may not be nested: It is not allowed to define a class, trait, interface or enum inside another class, trait or enum.

Description
___________
 
It is not allowed to define a class, trait, interface or enum inside another class, trait or enum. 

Conditional classes, trait, interfaces or enum may be created, inside if/then, functions and closures, or also loop structures.

The error message is the same for all types of structures, and only mentions class.


Example
_______

.. code-block:: php

   <?php
   
   class x {
   	function foo() {
   		class y {}
   	}
   }
   
   ?>

Solutions
_________

+ Use an anonymous class.
+ Use a conditional class, with a if/then, in the global space.
+ Use a function to store the definition and call it at will.
