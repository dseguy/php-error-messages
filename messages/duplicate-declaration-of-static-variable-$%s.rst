.. _duplicate-declaration-of-static-variable-\$%s:

Duplicate declaration of static variable $%s
--------------------------------------------
 
	.. meta::
		:description:
			Duplicate declaration of static variable $%s: It is not allowed anymore to declare twice a static variable in a method.

		:og:type: article
		:og:title: Duplicate declaration of static variable $%s
		:og:description: It is not allowed anymore to declare twice a static variable in a method
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/duplicate-declaration-of-static-variable-%24%25s.html

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


Literal Examples
****************
+ Duplicate declaration of static variable $a

Solutions
_________

+ Remove all the static declarations, but one: keep the earliest one.
