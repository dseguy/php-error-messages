.. _cannot-use-'readonly'-as-method-modifier:

Cannot use 'readonly' as method modifier
----------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot use 'readonly' as method modifier: readonly is an option for properties, and it is not available for methods nor constants.

Description
___________
 
readonly is an option for properties, and it is not available for methods nor constants.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	private readonly function foo() {}
   }
   
   ?>

Solutions
_________

+ Remove the option from the method signature.
