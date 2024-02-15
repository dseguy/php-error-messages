.. _redefinition-of-parameter-$b:

Redefinition of parameter $b
----------------------------
 
	.. meta::
		:description lang=en:
			Redefinition of parameter $b: Arguments must all have distinct names in a method signature.

Description
___________
 
Arguments must all have distinct names in a method signature. Before PHP 7.0, no error was emitted, and the last argument's value was used. In PHP 7.0 and more recent, it is a compilation error.

Example
_______

.. code-block:: php

   <?php
   
   function foo($b, $b, $b) {}
   
   ?>

Solutions
_________

+ Use all different names for the parameters.
