.. _a-class-constant-must-not-be-called-class.-it-is-reserved-for-class-name-fetching:

A class constant must not be called class. it is reserved for class name fetching
---------------------------------------------------------------------------------
 
	.. meta::
		:description:
			A class constant must not be called class. it is reserved for class name fetching: Class constants can use a lot of names, but not the name &#039;class&#039;.

		:og:type: article
		:og:title: A class constant must not be called class. it is reserved for class name fetching
		:og:description: Class constants can use a lot of names, but not the name &#039;class&#039;
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-class-constant-must-not-be-called-class.-it-is-reserved-for-class-name-fetching.html

Description
___________
 
Class constants can use a lot of names, but not the name 'class'. This is used by default to fetch the full name of the class, and there is no need to defined it. 

Hence, it is not possible to define a class constant called 'class', case non-withstanding, as it conflict with the default constant.'

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	const class = 1;
   }
   
   ?>

Solutions
_________

+ Use another name for that constant.
