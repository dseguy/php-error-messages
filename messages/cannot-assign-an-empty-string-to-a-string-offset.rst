.. _cannot-assign-an-empty-string-to-a-string-offset:

Cannot assign an empty string to a string offset
------------------------------------------------
 
.. meta::
	:description:
		Cannot assign an empty string to a string offset: It is possible to access an individual character inside a string, and replace it with another character.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot assign an empty string to a string offset
		:og:description: It is possible to access an individual character inside a string, and replace it with another character
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-assign-an-empty-string-to-a-string-offset.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Cannot assign an empty string to a string offset
		:twitter:description: Cannot assign an empty string to a string offset: It is possible to access an individual character inside a string, and replace it with another character
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
It is possible to access an individual character inside a string, and replace it with another character. 

On the other hand, it is not possible to remove that character by using an empty string. The only allowed modification is a replacement: one character replace another character. 

In fact, PHP will only use the first character, when trying to modify an offset with a string longer than one character. 

Example
_______

.. code-block:: php

   <?php
   
   $string = 'ab d';
   $string[2] = 'c';  // add c in the right place
   
   $string[2] = '';  // error
   
   $string[2] = 'Cdef';  // only sets the c
   
   ?>

Solutions
_________

+ Use substr() to cut the string before and after, then concatenate them.
+ Replace the character with a space.
