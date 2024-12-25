.. _too-few-arguments-to-function-%s%s%s(),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected:

Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected
-------------------------------------------------------------------------------------
 
	.. meta::
		:description:
			Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected: This error is emitted when the number of arguments to call a method or a function is not enough.

		:og:type: article
		:og:title: Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected
		:og:description: This error is emitted when the number of arguments to call a method or a function is not enough
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/too-few-arguments-to-function-%25s%25s%25s%28%29%2C-%25d-passed-in-%25s-on-line-%25d-and-%25s-%25d-expected.html

Description
___________
 
This error is emitted when the number of arguments to call a method or a function is not enough.

Without the required number of arguments at function call, the function cannot execute, as some variables would be missing.

This error covers situations where all the arguments are compulsory. 


Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b) {}
   
   foo(1);
   
   ?>


Literal Examples
****************
+ Too few arguments to function foo(), 1 passed in file.php on line 5 and exactly 2 expected

Solutions
_________

+ Add the missing arguments.
+ Add default values to the missing arguments.

Related Error Messages
______________________

+ :ref:`too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d`
