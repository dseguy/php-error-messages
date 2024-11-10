.. _duplicate-declaration-of-static-variable-\$%s:

Duplicate declaration of static variable $%s
--------------------------------------------
 
	.. meta::
		:description lang=en:
			Duplicate declaration of static variable $%s: It is not allowed anymore to declare twice a static variable in a method.

Description
___________
 
It is not allowed anymore to declare twice a static variable in a method. This is spotted at compile time.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
   	static $a;
   	
   	++$a;
   	
   	static $a;
   }
   
   ?>

Solutions
_________

+ Remove all the static declarations, but one: keep the earliest one.
