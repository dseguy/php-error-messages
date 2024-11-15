.. _cannot-use-'never'-as-class-name-as-it-is-reserved:

Cannot use 'never' as class name as it is reserved
--------------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot use 'never' as class name as it is reserved: never is a PHP reserved keyword, since PHP 8.

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
