.. _using-\${var}-in-strings-is-deprecated,-use-{\$var}-instead:

Using ${var} in strings is deprecated, use {$var} instead
---------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Using ${var} in strings is deprecated, use {$var} instead: For variable interpolation, the double quote strings used two variants: ``${var}`` (``$`` is outside the brackets), and ``{$var}`` (``$`` is inside the brackets).

Description
___________
 
For variable interpolation, the double quote strings used two variants: ``${var}`` (``$`` is outside the brackets), and ``{$var}`` (``$`` is inside the brackets).

The first one has been deprecated, and it should be removed in PHP 9.0.


Example
_______

.. code-block:: php

   <?php
   
   $var = 'abc';
   
   echo ;
   
   ?>

Solutions
_________

+ Replace ``${var}`` with ``$var`` inside the string. It should work most of the time.
+ Replace ``${var}`` with ``{$var}`` inside the string. It works every time.
