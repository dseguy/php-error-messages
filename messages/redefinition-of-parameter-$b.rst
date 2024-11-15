.. _redefinition-of-parameter-\$b:

Redefinition of parameter $b
----------------------------
 
	.. meta::
		:description:
			Redefinition of parameter $b: Parameters must all have distinct names in a method signature.

		:og:type: article
		:og:title: Redefinition of parameter $b
		:og:description: Parameters must all have distinct names in a method signature
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/redefinition-of-parameter-%24b.html

Description
___________
 
Parameters must all have distinct names in a method signature. Before PHP 7.0, no error was emitted, and the last parameter's value was used. In PHP 7.0 and more recent, it is a compilation error.

Example
_______

.. code-block:: php

   <?php
   
   function foo($b, $b, $b) {}
   
   ?>

Solutions
_________

+ Use all different names for the parameters.
