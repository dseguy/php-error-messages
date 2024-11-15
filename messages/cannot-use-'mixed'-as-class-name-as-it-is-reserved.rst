.. _cannot-use-'mixed'-as-class-name-as-it-is-reserved:

Cannot use 'mixed' as class name as it is reserved
--------------------------------------------------
 
	.. meta::
		:description:
			Cannot use 'mixed' as class name as it is reserved: mixed is a PHP reserved keyword, since PHP 8.

		:og:type: article
		:og:title: Cannot use &#039;mixed&#039; as class name as it is reserved
		:og:description: mixed is a PHP reserved keyword, since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27mixed%27-as-class-name-as-it-is-reserved.html

Description
___________
 
mixed is a PHP reserved keyword, since PHP 8.0. Until then, it was possible to use it anywhere as names, but since PHP 8.0, it is forbidden with class names, interfaces, enumerations and traits.

The same error is used for all CITE structures : class, interfaces, traits and enumerations.

Namespaces do not solve this issue.

mixed as a function, method, property, global or class constants is legit.

Example
_______

.. code-block:: php

   <?php
   
   class mixed {}
   interface mixed {}
   trait mixed {}
   enum mixed {}
   
   ?>

Solutions
_________

+ Use another name for that class.
