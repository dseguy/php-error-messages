.. _cannot-use-'abstract'-as-constant-modifier:

Cannot use 'abstract' as constant modifier
------------------------------------------
 
	.. meta::
		:description:
			Cannot use 'abstract' as constant modifier: ``abstract``` is an option for methods, and it is not available for class constants and properties.

		:og:type: article
		:og:title: Cannot use &#039;abstract&#039; as constant modifier
		:og:description: ``abstract``` is an option for methods, and it is not available for class constants and properties
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27abstract%27-as-constant-modifier.html

Description
___________
 
``abstract``` is an option for methods, and it is not available for class constants and properties.

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
