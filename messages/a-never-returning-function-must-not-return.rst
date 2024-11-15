.. _a-never-returning-function-must-not-return:

A never-returning function must not return
------------------------------------------
 
	.. meta::
		:description:
			A never-returning function must not return: When using the ``never`` keyword, the function shall not use the ``return`` keyword.

		:og:type: article
		:og:title: A never-returning function must not return
		:og:description: When using the ``never`` keyword, the function shall not use the ``return`` keyword
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-never-returning-function-must-not-return.html

Description
___________
 
When using the ``never`` keyword, the function shall not use the ``return`` keyword. ``never`` means that the function will not return, but rather ``die``, throw an exception, or trigger an error.

Also note that ``never`` cannot be used in a union type.

This error message applies to functions, closures and arrow functions. In PHP 8.4, a separate message applies to methods. 


Example
_______

.. code-block:: php

   <?php
   
   function foo() : never {
   	return true;
   }
   
   ?>

Solutions
_________

+ Remove the ``return`` keyword in the body of the function.
+ Change the ``never`` return type to another type.

Related Error Messages
______________________

+ :ref:`a-never-returning-method-must-not-return`
