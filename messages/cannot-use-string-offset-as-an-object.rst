.. _cannot-use-string-offset-as-an-object:

Cannot use string offset as an object
-------------------------------------
 
.. meta::
	:description:
		Cannot use string offset as an object: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot use string offset as an object
		:og:description: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-string-offset-as-an-object.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Cannot use string offset as an object
		:twitter:description: Cannot use string offset as an object: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character. And in general, it is also possible to chain the array syntax to access properties ``$array[1]->p``. 

Yet, the individual characters of a string are never objects, so it is not possible to use that syntax with them, while reading it from the string.

Example
_______

.. code-block:: php

   <?php
   
   $string = '123';
   
   unset($string[0]->a);
   
   ?>

Solutions
_________

+ Remove the 2nd array syntax when working with a string.

Related Error Messages
______________________

+ :ref:`cannot-use-string-offset-as-an-array`
