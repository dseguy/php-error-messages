.. _defining-a-custom-assert()-function-is-not-allowed,:

Defining a custom assert() function is not allowed,
---------------------------------------------------
 
	.. meta::
		:description lang=en:
			Defining a custom assert() function is not allowed,: assert() is a PHP native function, used to create assertions.

Description
___________
 
assert() is a PHP native function, used to create assertions. To avoid confusion, or redefinition of this function, it is not allowed to create a custom version of this function, even in a namespace.

Example
_______

.. code-block:: php

   <?php
   
   namespace x;
   
   function assert() {}
   
   ?>

Solutions
_________

+ Give another name to that function.
+ Make it a method.
+ Make it a Closure.

See Also
________

+ `assert() <https://www.php.net/manual/en/function.assert.php>`_
