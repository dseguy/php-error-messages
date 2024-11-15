.. _calling-get_class()-without-arguments-is-deprecated:

Calling get_class() without arguments is deprecated
---------------------------------------------------
 
	.. meta::
		:description lang=en:
			Calling get_class() without arguments is deprecated: get_class() used to allow its usage without an argument.

Description
___________
 
get_class() used to allow its usage without an argument. Then, it would return the current class context, at compile time. Hence, in the code here, it used to return ``x``, may it be called from ``x`` or ``y``. 

This behavior is not allowed anymore, and will be removed in PHP 9.

Note that calling get_class without an argument was different from calling get_class with the ``null`` value.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	function foo() {
   		echo get_class();         // x
   		echo get_class($this);    // y
   
   		// echo get_class(null);  // Type error
   	}
   }
   
   class y extends x {}
   
   echo (new y)->foo();
   
   ?>

Solutions
_________

+ Use the __CLASS__ constant to get the name of the class at compile time.
+ Use the ``get_class($this)`` call, to get the name of the class at execution time.
