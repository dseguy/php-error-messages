.. _cannot-use-::class-with-dynamic-class-name:

Cannot use ::class with dynamic class name
------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot use ::class with dynamic class name: Until PHP 8.

Description
___________
 
Until PHP 8.0, it was not possible to use a variable (or any data container) with the ::class operator to get its name. Basically, the name of the class had to be hardcoded. 

Example
_______

.. code-block:: php

   <?php
   
   $a::class;
   
   ?>

Solutions
_________

+ Use get_class().
+ Use instanceof.
