.. _never-cannot-be-used-as-a-parameter-type:

never cannot be used as a parameter type
----------------------------------------
 
	.. meta::
		:description lang=en:
			never cannot be used as a parameter type: Never is a PHP return type, that is used to indicate that a method will not return a value.

Description
___________
 
Never is a PHP return type, that is used to indicate that a method will not return a value. As such, it makes no sense to use with a parameter, as a parameter cannot return any value. Hence, the never type cannot be used with a parameter.

Example
_______

.. code-block:: php

   <?php
   
   function foo(never $n) {}
   
   ?>

Solutions
_________

+ Remove the never type.
+ Change the never type to another type.
