.. _a-function-with-return-type-must-return-a-value:

A function with return type must return a value
-----------------------------------------------
 
	.. meta::
		:description lang=en:
			A function with return type must return a value: When a function has a return type, it must have a return command in its block, which must also have an argument.

Description
___________
 
When a function has a return type, it must have a return command in its block, which must also have an argument. In this illustration, return has no argument, so it is return void, and this is detected at compilation time. 

Note that PHP lint doesn't check the type of the returned value at linting time: any return value makes this error go away. Type is checked at execution time, and only when the expression is used: it may trigger a 'Return value must be of type int, string returned'.

This also applies to closures, methods, arrow functions.

This error is displayed with any return that doesn't have an argument. They might be several of them in a single function.


Example
_______

.. code-block:: php

   <?php
   function foo(): int {
   	return ;
   }
   
   ?>

Solutions
_________

+ Add a returned value to all the return command.
+ Check all the return commands for returned values.
+ Remove the return type.
