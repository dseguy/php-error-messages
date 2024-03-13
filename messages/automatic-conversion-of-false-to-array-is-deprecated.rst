.. _automatic-conversion-of-false-to-array-is-deprecated:

Automatic conversion of false to array is deprecated
----------------------------------------------------
 
	.. meta::
		:description lang=en:
			Automatic conversion of false to array is deprecated: The array syntax ``$variable[index]`` is only available for arrays and strings.

Description
___________
 
The array syntax ``$variable[index]`` is only available for arrays and strings. Yet, false is an edge case: PHP used to convert automatically, and silently, the boolean to array, when that syntax was used. This is called autovivification. 

The other boolean, ``true`` behaves the same way, with a different error message. 

This feature is used to initialize variables with false, and then convert it to array as needed. 

Since PHP 8.1, it is a deprecated behavior. 

Example
_______

.. code-block:: php

   <?php
   
   $variable = false;
   $variable[0] = 1;
   // $variable is now an array
   
   ?>

Solutions
_________

+ Use an empty array as default value.
+ Test the type of the variable before using it as an array.
