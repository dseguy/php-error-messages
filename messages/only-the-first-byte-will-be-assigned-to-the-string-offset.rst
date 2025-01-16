.. _only-the-first-byte-will-be-assigned-to-the-string-offset:

Only the first byte will be assigned to the string offset
---------------------------------------------------------
 
	.. meta::
		:description:
			Only the first byte will be assigned to the string offset: The array notation is available with strings, to both write and read.

		:og:type: article
		:og:title: Only the first byte will be assigned to the string offset
		:og:description: The array notation is available with strings, to both write and read
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-the-first-byte-will-be-assigned-to-the-string-offset.html

Description
___________
 
The array notation is available with strings, to both write and read. When writing to a string, the new assigned character must be a single character, and even, a single byte. This means that it is not possible to replace multiple characters, or to inject a longer string inside another one with such syntax. 

As a side effect, this also applies to multi-byte characters: since they are represented on two, or more, characters, they cannot be injected in such syntax.


Example
_______

.. code-block:: php

   <?php
   
   $string = 'abc';
   $string[3] = 'd'; 
   // abcd
   $string[4] = 'ef';
   // warning
   // abcde
   $string[5] = '我'; // multi-byte character
   // warning
   // abcde� // <- invisible character at the end of the string
   
   
   ?>

Solutions
_________

+ Use preg_replace() or str_replace() to inject more than one character.
+ Splice the string and insert the new string in-between: ``substr($string, 0, $x).$newString.substr($string,$x+1)``.
