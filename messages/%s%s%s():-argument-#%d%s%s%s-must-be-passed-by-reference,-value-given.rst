.. _%s%s%s():-argument-#%d%s%s%s-must-be-passed-by-reference,-value-given:

%s%s%s(): Argument #%d%s%s%s must be passed by reference, value given
---------------------------------------------------------------------
 
	.. meta::
		:description:
			%s%s%s(): Argument #%d%s%s%s must be passed by reference, value given: When a parameter is set to be passed by reference, there is a ``&amp;`` character before its name.

		:og:type: article
		:og:title: %s%s%s(): Argument #%d%s%s%s must be passed by reference, value given
		:og:description: When a parameter is set to be passed by reference, there is a ``&amp;`` character before its name
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%25s%25s%28%29%3A-argument-%23%25d%25s%25s%25s-must-be-passed-by-reference%2C-value-given.html

Description
___________
 
When a parameter is set to be passed by reference, there is a ``&`` character before its name. In that case, the argument must be a data container, such as a variable, a property, a static property, an array index, but it cannot be a literal value, a constant, or the result of an expression.

Example
_______

.. code-block:: php

   <?php
   
   function foo(&$a) {}
   
   // invalid cases
   foo(1);
   foo(1 + 2);
   
   const A = 1;
   foo(A);
   
   class X {
       const B = 2;
   }
   foo(X::B);
   
   ?>


Literal Examples
****************
+ foo(): Argument #1 ($a) must be passed by reference, value given

Solutions
_________

+ Store the value in a variable and passe the variable.
+ Remove the reference in the method signature.

Related Error Messages
______________________

+ :ref:`cannot-pass-parameter-%d-by-reference`
