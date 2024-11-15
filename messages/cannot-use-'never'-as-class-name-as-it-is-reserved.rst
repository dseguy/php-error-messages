.. _cannot-use-'never'-as-class-name-as-it-is-reserved:

Cannot use 'never' as class name as it is reserved
--------------------------------------------------
 
	.. meta::
		:description:
			Cannot use 'never' as class name as it is reserved: never is a PHP reserved keyword, since PHP 8.

		:og:type: article
		:og:title: Cannot use &#039;never&#039; as class name as it is reserved
		:og:description: never is a PHP reserved keyword, since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27never%27-as-class-name-as-it-is-reserved.html

Description
___________
 
never is a PHP reserved keyword, since PHP 8.1. Until then, it was possible to use it anywhere as names, but since PHP 8.1, it is forbidden with class names, interfaces, enumerations and traits.

The same error is used for all CITE structures : class, interfaces, traits and enumerations.

Namespaces do not solve this issue.

never as a function, method, property, global or class constants is legit.

Example
_______

.. code-block:: php

   <?php
   
   class never {}
   interface never {}
   trait never {}
   enum never {}
   
   ?>

Solutions
_________

+ Use another name for that class.
