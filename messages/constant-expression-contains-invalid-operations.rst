.. _constant-expression-contains-invalid-operations:

Constant expression contains invalid operations
-----------------------------------------------
 
	.. meta::
		:description:
			Constant expression contains invalid operations: The Constant expressions are the value of a constant, global or class, that is not a literal value.

		:og:type: article
		:og:title: Constant expression contains invalid operations
		:og:description: The Constant expressions are the value of a constant, global or class, that is not a literal value
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html

Description
___________
 
The Constant expressions are the value of a constant, global or class, that is not a literal value. They are calculated. 

Constant expressions allows literals, other constants, and most of the operators. Some elements are forbidden: variables, functions, methods and cast operators. 

Properties are allowed, but only on enumeration's cases. New and arrays are allowed, and so does the ternary and coalesce operators, leading to possible conditional constants expressions (sic). Magic constant are also OK.


Example
_______

.. code-block:: php

   <?php
   
   class x {
   	// invalid, because of the usage of the variable
   	const X = $a;
   }
   
   ?>

Solutions
_________

+ Remove the invalid elements or operations.

Related Error Messages
______________________

+ :ref:`fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed`
