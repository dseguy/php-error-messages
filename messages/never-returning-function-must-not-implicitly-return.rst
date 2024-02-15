.. _never-returning-function-must-not-implicitly-return:

never-returning function must not implicitly return
---------------------------------------------------
 
	.. meta::
		:description lang=en:
			never-returning function must not implicitly return: A never returning function or method never reaches the end of the method, or any return operation.

Description
___________
 
A never returning function or method never reaches the end of the method, or any return operation. It must either throw an exception, trigger an error, die or exit, or stay in an infinite loop. 

In the case of an empty function, PHP execution reachs the end of the method, and adds an implicit ``return null`` call, which triggers the TypeError. 

``never`` type is checked at execution time, though the presence of ``return`` in the body of the method triggers it at linting time. 


Example
_______

.. code-block:: php

   <?php
   
   function foo() : never { }
   
   ?>

Solutions
_________

+ Remove all return calls from the body of the method.
+ Prevent the method to reaching its end.
+ Checks that the method include either a ``throw``, ``die`` or ``exit``, a call to another never-returning method, or an infinite loop.
