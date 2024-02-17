.. _using--(variable-variables)-in-strings-is-deprecated,-use-{}-instead:

Using  (variable variables) in strings is deprecated, use {} instead
--------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Using  (variable variables) in strings is deprecated, use {} instead: The interpolation syntax  is deprecated.

Description
___________
 
The interpolation syntax  is deprecated. It takes an expression (here, a concatenation) to build the name of the variable that is used in the end. It is recommended to update the syntax with a compatible one or use concatenation, before the syntax is removed.

Example
_______

.. code-block:: php

   <?php
   
   $foo = 'bar';
   var_dump();
   
   ?>

Solutions
_________

+ Use {} instead.
+ Use concatenation instead.
