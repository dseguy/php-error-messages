.. _array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported:

Array and string offset access syntax with curly braces is no longer supported
------------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Array and string offset access syntax with curly braces is no longer supported: PHP used to support the curly braces ``{}`` to access elements in an array and a string.

Description
___________
 
PHP used to support the curly braces ``{}`` to access elements in an array and a string. This was deprecated in PHP 7.4 and abandonned in PHP 8.0. The only operator to access an element is the square brackets ``[]``.

Example
_______

.. code-block:: php

   <?php
   
   $string = 'abc';
   echo $string{1}; // b
   
   $array = ['A', 'B', 'C'];
   echo $array{1};  // B
   
   
   ?>

Solutions
_________

+ Switch to the square brackets.
+ Use the substr() function to extract one string char.
