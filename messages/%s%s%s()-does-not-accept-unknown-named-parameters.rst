.. _%s%s%s()-does-not-accept-unknown-named-parameters:

%s%s%s() does not accept unknown named parameters
-------------------------------------------------
 
	.. meta::
		:description lang=en:
			%s%s%s() does not accept unknown named parameters: printf() and sprintf() take a format string as first argument, and an arbitrary number of arguments after that.

Description
___________
 
printf() and sprintf() take a format string as first argument, and an arbitrary number of arguments after that. Those extra arguments are only positional. Hence, it is not possible to use ellipsis on an array with string keys. 

Example
_______

.. code-block:: php

   <?php
   
   printf('%s', ...['a' => 2]);
   
   ?>

Solutions
_________

+ Use array_values() on the array, before the ellipsis.
