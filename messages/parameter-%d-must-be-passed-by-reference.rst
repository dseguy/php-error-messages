.. _parameter-%d-must-be-passed-by-reference:

Parameter %d must be passed by reference
----------------------------------------
 
	.. meta::
		:description:
			Parameter %d must be passed by reference: When a parameter is set to be passed by reference, there is a ``&amp;`` character before its name.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Parameter %d must be passed by reference
		:og:description: When a parameter is set to be passed by reference, there is a ``&amp;`` character before its name
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/parameter-%25d-must-be-passed-by-reference.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter %d must be passed by reference
	:twitter:description: Parameter %d must be passed by reference: When a parameter is set to be passed by reference, there is a ``&`` character before its name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
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


In more recent PHP versions, this error message is now :ref:`%s%s%s():-argument-#%d%s%s%s-must-be-passed-by-reference,-value-given`.
