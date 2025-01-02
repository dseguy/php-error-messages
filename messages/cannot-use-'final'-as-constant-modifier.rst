.. _cannot-use-'final'-as-constant-modifier:

Cannot use 'final' as constant modifier
---------------------------------------
 
	.. meta::
		:description:
			Cannot use 'final' as constant modifier: ``final``` is an option for methods, and it is not available for class constants and properties.

		:og:type: article
		:og:title: Cannot use &#039;final&#039; as constant modifier
		:og:description: ``final``` is an option for methods, and it is not available for class constants and properties
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27final%27-as-constant-modifier.html

Description
___________
 
``final``` is an option for methods, and it is not available for class constants and properties. It becomes a feature with class constants in PHP 8.0.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	private static const A  = 1;
   }
   
   ?>

Solutions
_________

+ Remove the option from the constant signature.
