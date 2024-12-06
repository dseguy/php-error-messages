.. _%s():-never-returning-%s-must-not-implicitly-return:

%s(): never-returning %s must not implicitly return
---------------------------------------------------
 
	.. meta::
		:description:
			%s(): never-returning %s must not implicitly return: An implicit return is a method reaching the end of its body block, and ending its execution without an explicit ``return`` statement.

		:og:type: article
		:og:title: %s(): never-returning %s must not implicitly return
		:og:description: An implicit return is a method reaching the end of its body block, and ending its execution without an explicit ``return`` statement
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-never-returning-%25s-must-not-implicitly-return.html

Description
___________
 
An implicit return is a method reaching the end of its body block, and ending its execution without an explicit ``return`` statement. In fact, PHP executes an implicit return statement, et returns the value ``NULL``. In the case of a method, whose return type is ``never``, this should not happen. There must be a call to ``die``, ``exit``, or ``throw``, or any other mean to prevent this function to reach its normal ending. 

This error is only reported at execution time.

Example
_______

.. code-block:: php

   <?php
   
   function myDeath(): never {
   
       if (rand(0, 1)) {
           die();
       }
   }
   
   myDeath();
   
   ?>


Literal Examples
****************
+ myDeath(): never-returning function must not implicitly return

Solutions
_________

+ Add a ``die`` or ``exit`` before the end of the method.
+ Add a ``throw`` before the end of the method.
+ Add an infinite loop in the method.
