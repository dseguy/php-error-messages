.. _cannot-be-a-class-constant:

cannot be a class constant
--------------------------
 
	.. meta::
		:description lang=en:
			cannot be a class constant: Class constants must be defined in classes, enums, traits or interfaces.

Description
___________
 
Class constants must be defined in classes, enums, traits or interfaces. They cannot be created dynamically, nor with the define() function.

Example
_______

.. code-block:: php

   <?php
   define('foo::bar', 1);
   define('::', 1);
   ?>

Solutions
_________

+ Define the class constant in a class.
+ Define the class constant in a trait.
+ Define the class constant in a interface.
+ Define the class constant in a enum.
+ Define the global constant, and use it as a value for the class constant.
