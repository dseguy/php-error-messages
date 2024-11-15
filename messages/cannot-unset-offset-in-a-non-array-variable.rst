.. _cannot-unset-offset-in-a-non-array-variable:

Cannot unset offset in a non-array variable
-------------------------------------------
 
	.. meta::
		:description:
			Cannot unset offset in a non-array variable: The array syntax ``$variable[index]`` is only available for arrays and strings.

		:og:type: article
		:og:title: Cannot unset offset in a non-array variable
		:og:description: The array syntax ``$variable[index]`` is only available for arrays and strings
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unset-offset-in-a-non-array-variable.html

Description
___________
 
The array syntax ``$variable[index]`` is only available for arrays and strings. When used on other types, PHP emits a fatal error.  

The boolean ``false`` and the ``null`` value still accept this behavior. The first is deprecated in PHP 8.1, and the second valid in PHP 8.3. 

Example
_______

.. code-block:: php

   <?php
   
   $x = true;
   $x[0] = 1;
   
   ?>

Solutions
_________

+ Check for type before using the array syntax.
+ Keep using consistent types with each variables.
+ Set type with properties to ensure they are consistent.
+ Cast the object to array before usage.

Related Error Messages
______________________

+ :ref:`automatic-conversion-of-false-to-array-is-deprecated`


In previous PHP versions, this error message used to be :ref:`cannot-use-object-of-type-stdclass-as-array`.
