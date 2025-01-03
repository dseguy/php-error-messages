.. _cannot-use-temporary-expression-in-write-context:

Cannot use temporary expression in write context
------------------------------------------------
 
	.. meta::
		:description:
			Cannot use temporary expression in write context: Literal values and constants, global or class, cannot be used for writing: they are immutable.

		:og:type: article
		:og:title: Cannot use temporary expression in write context
		:og:description: Literal values and constants, global or class, cannot be used for writing: they are immutable
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-temporary-expression-in-write-context.html

Description
___________
 
Literal values and constants, global or class, cannot be used for writing: they are immutable. When it is attempted nontheless, this error is displayed.

Those values must be placed in a container, such as a variable, array element, property or static property. That way, they become updatable.

The literal values may be hidden in a returned value, or by a call to native PHP functions which return literals. They may also be hidden in a foreach() call, which does implicit assignments.

This is also the case with the append ``$variable[]`` operator, and with object notations on a a constant. 

Passing a dimension fetch on a temporary by reference is also not allowed. 

The surprising error message comes from the temporary expression built by PHP, to allow a read access to the value. ``echo A->p;`` is a read access, while ``A->p = 3`` is a write access.

Example
_______

.. code-block:: php

   <?php
   
   // This emits the error
   A->p = 3;
   
   // This is a syntax error
   // A = 3;
   
   // Attempt to append 1 to an empty literal array
   [][] = 1;
   array()[] = 1;
   
   $a = array();
   $a[] = 1;
   
   $fn = function(&$ref) {};
   $fn([0, 1][0]);
   
   function goo() { return [0, 1][0];}
   // The constant is hidden in the function goo()
   $fn(goo());
   
   function hoo($fn) {
   	// PHP provide literal values
   	$fn(func_get_args()[0]);
   }
   
   ?>

Solutions
_________

+ Store the literal value in a variable, a property or an array index before writing to it.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-';',-expecting-'['`
+ :ref:`syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"["`
+ :ref:`syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"{"-or-"["`
