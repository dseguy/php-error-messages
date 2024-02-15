.. _call-to-undefined-function:

Call to undefined function
--------------------------
 
	.. meta::
		:description lang=en:
			Call to undefined function: This happens when calling a function that is not defined.

Description
___________
 
This happens when calling a function that is not defined. 

There should be a function definition in the code, and that function must be included in the code before its call. 

The function may be defined in a PHP extension, or its core: then, the function has no definition. Its existence may be checked with a call to ``get_defined_function()``, which lists all the functions, at the execution point.  

The function might be defined in a different namespace, or its import might be missing.


Example
_______

.. code-block:: php

   <?php
   
   foo();
   
   function foo() {}
   
   ?>

Solutions
_________

+ Check the spelling of the function.
+ Check the version of PHP, or its extension: some functions are defined in specific versions, or later.
+ Check the namespace of the called function: it might not be available in the current namespace.
+ Check the use expression at the beginning of the file: the import expression might be missing.
