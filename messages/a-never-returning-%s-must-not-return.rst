.. _a-never-returning-%s-must-not-return:

A never-returning %s must not return
------------------------------------
 
	.. meta::
		:description lang=en:
			A never-returning %s must not return: A function that never returns, aka, with the ``never`` return type, must not use the return statement.

Description
___________
 
A function that never returns, aka, with the ``never`` return type, must not use the return statement. 

In fact, it must use either ``throw``, ``die``, ``exit``, or call another function that never returns. 

This applies to methods, static methods, and any variant of closure.

The runtime-equivalent of this error is ``never-returning function must not implicitly return``.


Example
_______

.. code-block:: php

   <?php
   
   function foo() : never {
   	return 1;
   }
   
   ?>

Solutions
_________

+ Remove the ``never`` return type.
+ Remove the ``return`` call.
