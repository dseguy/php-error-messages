.. _uninitialized-string-offset:

Uninitialized string offset
---------------------------
 
	.. meta::
		:description lang=en:
			Uninitialized string offset: This error appears when using the array syntax on strings, while the requested index is too large, or too small.

Description
___________
 
This error appears when using the array syntax on strings, while the requested index is too large, or too small.

An offset is too big when it is beyond the length of the string. An offset is too small with it is below the length of the string, multiplied by -1. All values between [- strlen($string), strlen($string)] are valid.

This error is displayed when the string offset is read. It becomes a 'Illegal string offset' when the syntax is used to write a character.


Example
_______

.. code-block:: php

   <?php
   
   $string = 'abc';
   
   //Uninitialized string offset
   echo $string[-10];
   
   //Uninitialized string offset that is too big
   echo $string[5];
   
   ?>

Solutions
_________

+ Check for the size of the string before using the offset.
+ Use substr(), which returns empty string for out of range offsets.

Related Error Messages
______________________

+ :ref:`illegal-string-offset`
