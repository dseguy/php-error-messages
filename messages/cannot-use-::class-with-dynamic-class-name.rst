.. _cannot-use-::class-with-dynamic-class-name:

Cannot use ::class with dynamic class name
------------------------------------------
 
	.. meta::
		:description:
			Cannot use ::class with dynamic class name: Until PHP 8.

		:og:type: article
		:og:title: Cannot use ::class with dynamic class name
		:og:description: Until PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%3A%3Aclass-with-dynamic-class-name.html

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


In more recent PHP versions, this error message is now :ref:`no-next-error`.
