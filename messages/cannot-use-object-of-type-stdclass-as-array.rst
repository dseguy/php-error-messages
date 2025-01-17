.. _cannot-use-object-of-type-stdclass-as-array:

Cannot use object of type stdClass as array
-------------------------------------------
 
.. meta::
	:description:
		Cannot use object of type stdClass as array: The array syntax ``$variable[index]`` is only available for arrays and strings.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot use object of type stdClass as array
		:og:description: The array syntax ``$variable[index]`` is only available for arrays and strings
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-object-of-type-stdclass-as-array.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Cannot use object of type stdClass as array
		:twitter:description: Cannot use object of type stdClass as array: The array syntax ``$variable[index]`` is only available for arrays and strings
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The array syntax ``$variable[index]`` is only available for arrays and strings. When used on objects, PHP emits a fatal error.  

The boolean ``false`` and the ``null`` value still accept this behavior. The first is deprecated in PHP 8.1, and the second valid in PHP 8.3. 

Example
_______

.. code-block:: php

   <?php
   
   $x = new Stdclass();
   $x[0] = 1;
   
   ?>

Solutions
_________

+ Check for type before using the array syntax.
+ Keep using consistent types with each variables.
+ Set type with properties to ensure they are consistent.
+ Cast the object to array before usage.


In previous PHP versions, this error message used to be :ref:`cannot-unset-offset-in-a-non-array-variable`.
