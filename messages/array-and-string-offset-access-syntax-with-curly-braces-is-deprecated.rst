.. _array-and-string-offset-access-syntax-with-curly-braces-is-deprecated:

Array and string offset access syntax with curly braces is deprecated
---------------------------------------------------------------------
 
	.. meta::
		:description:
			Array and string offset access syntax with curly braces is deprecated: PHP used to support the curly braces ``{}`` to access elements in an array and a string.

		:og:type: article
		:og:title: Array and string offset access syntax with curly braces is deprecated
		:og:description: PHP used to support the curly braces ``{}`` to access elements in an array and a string
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html

Description
___________
 
PHP used to support the curly braces ``{}`` to access elements in an array and a string. This was deprecated in PHP 7.4 and abandoned in PHP 8.0. The only operator to access an element is the square brackets ``[]``.

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


In previous PHP versions, this error message used to be :ref:`array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported`.
