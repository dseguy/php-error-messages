.. _cannot-use-string-offset-as-an-array:

Cannot use string offset as an array
------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot use string offset as an array: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character.

Description
___________
 
It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character. And in general, it is also possible to chain the array syntax to access multi-dimensionnal elements ``$array[1][2]``. 

Yet, the individual characters of a string are not arrays, so it is not possible to use that syntax with them, while reading it from the string. 

On the other hand, it is possible to assign the character to a variable: PHP considers it then as a normal string.


Example
_______

.. code-block:: php

   <?php
   
   $string = '123';
   
   unset($string[0][1]);
   
   ?>

Solutions
_________

+ Remove the 2nd array syntax when working with a string.
+ Assign the character to a variable, and then use it as a string.

Related Error Messages
______________________

+ :ref:`cannot-use-string-offset-as-an-object`
