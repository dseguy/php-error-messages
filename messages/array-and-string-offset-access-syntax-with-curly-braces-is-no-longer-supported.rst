.. _array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported:

Array and string offset access syntax with curly braces is no longer supported
------------------------------------------------------------------------------
 
.. meta::
	:description:
		Array and string offset access syntax with curly braces is no longer supported: PHP used to support the curly braces ``{}`` to access elements in an array and a string.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Array and string offset access syntax with curly braces is no longer supported
	:og:description: PHP used to support the curly braces ``{}`` to access elements in an array and a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array and string offset access syntax with curly braces is no longer supported
	:twitter:description: Array and string offset access syntax with curly braces is no longer supported: PHP used to support the curly braces ``{}`` to access elements in an array and a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

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


In previous PHP versions, this error message used to be :ref:`array-and-string-offset-access-syntax-with-curly-braces-is-deprecated`.
