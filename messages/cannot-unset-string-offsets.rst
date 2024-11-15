.. _cannot-unset-string-offsets:

Cannot unset string offsets
---------------------------
 
	.. meta::
		:description lang=en:
			Cannot unset string offsets: While strings and arrays share the same syntax with square brackets, to access individual elements, that syntax is not available with the unset() function.

Description
___________
 
While strings and arrays share the same syntax with square brackets, to access individual elements, that syntax is not available with the unset() function. Strings do not behave like an array, so it is not possible to remove one char with unset.

Example
_______

.. code-block:: php

   <?php
   
   $a = 'abc';
   unset($a);
   
   ?>

Solutions
_________

+ Explode() the string into an array, use the unset() on the array, and then, implode() it back into a string.
+ Use substr() twice, to cut out the unwanted character.
+ Use preg_replace(), to replace the character with an empty string.
+ Use strtr(), to replace the character with an empty string, if it is unique.
