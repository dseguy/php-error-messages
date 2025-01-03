.. _cannot-use-'readonly'-as-method-modifier:

Cannot use 'readonly' as method modifier
----------------------------------------
 
	.. meta::
		:description:
			Cannot use 'readonly' as method modifier: readonly is an option for properties, and it is not available for methods nor constants.

		:og:type: article
		:og:title: Cannot use &#039;readonly&#039; as method modifier
		:og:description: readonly is an option for properties, and it is not available for methods nor constants
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27readonly%27-as-method-modifier.html

Description
___________
 
readonly is an option for properties, and it is not available for methods nor constants.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private readonly function foo() {}
   }
   
   ?>

Solutions
_________

+ Remove the option from the method signature.
