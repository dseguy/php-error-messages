.. _cannot-use-'static'-as-constant-modifier:

Cannot use 'static' as constant modifier
----------------------------------------
 
	.. meta::
		:description:
			Cannot use 'static' as constant modifier: static is an option for properties and methods, and it is not available for class constants.

		:og:type: article
		:og:title: Cannot use &#039;static&#039; as constant modifier
		:og:description: static is an option for properties and methods, and it is not available for class constants
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27static%27-as-constant-modifier.html

Description
___________
 
static is an option for properties and methods, and it is not available for class constants.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private static const A  = 1;
   }
   
   ?>

Solutions
_________

+ Remove the option from the constant signature.
