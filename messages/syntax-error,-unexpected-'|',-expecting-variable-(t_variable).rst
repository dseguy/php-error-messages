.. _syntax-error,-unexpected-'|',-expecting-variable-(t_variable):

syntax error, unexpected '|', expecting variable (T_VARIABLE)
-------------------------------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected '|', expecting variable (T_VARIABLE): Union types were introduced in PHP 8.

		:og:type: article
		:og:title: syntax error, unexpected &#039;|&#039;, expecting variable (T_VARIABLE)
		:og:description: Union types were introduced in PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%7C%27%2C-expecting-variable-%28t_variable%29.html

Description
___________
 
Union types were introduced in PHP 8.0: union type allows the specification of several distinct types, separated by a ``|`` pipe character. Until PHP 8.0, types were immediately followed by the variable or property name.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private int|float $property;
   }
   
   function foo(int|float $property) {}
   
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.0.
+ Find a common supertype to the two (or more) involved types.
+ Remove all types.
