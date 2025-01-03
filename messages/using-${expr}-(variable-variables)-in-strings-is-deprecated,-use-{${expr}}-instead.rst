.. _using-\${expr}-(variable-variables)-in-strings-is-deprecated,-use-{\${expr}}-instead:

Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead
----------------------------------------------------------------------------------
 
	.. meta::
		:description:
			Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead: The interpolation syntax ``${expr}`` is deprecated.

		:og:type: article
		:og:title: Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead
		:og:description: The interpolation syntax ``${expr}`` is deprecated
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-%24%7Bexpr%7D-%28variable-variables%29-in-strings-is-deprecated%2C-use-%7B%24%7Bexpr%7D%7D-instead.html

Description
___________
 
The interpolation syntax ``${expr}`` is deprecated. It takes an expression (here, a concatenation) to build the name of the variable that is used in the end. It is recommended to update the syntax with a compatible one or use concatenation, before the syntax is removed.

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
