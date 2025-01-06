.. _multiple-static-modifiers-are-not-allowed:

Multiple static modifiers are not allowed
-----------------------------------------
 
	.. meta::
		:description:
			Multiple static modifiers are not allowed: Only one static option is necessary to make a property static.

		:og:type: article
		:og:title: Multiple static modifiers are not allowed
		:og:description: Only one static option is necessary to make a property static
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/multiple-static-modifiers-are-not-allowed.html

Description
___________
 
Only one static option is necessary to make a property static. Two is overkill, and not needed, so PHP reports it.

There are similar messages for multiple readonly, or multiple static.

Multiple static on a closure or arrow function leads to a parse error. 


Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private static static A $b;
   
   	private static static function a() {}
   }
   
   static static function () {}; 
   
   ?>

Solutions
_________

+ Drop the extra static, and keep only one.
+ Drop all the static options.

Related Error Messages
______________________

+ :ref:`multiple-readonly-modifiers-are-not-allowed`
+ :ref:`multiple-access-type-modifiers-are-not-allowed`
