.. _cannot-use-variable-\$%s-twice:

Cannot use variable $%S twice
-----------------------------
 
	.. meta::
		:description:
			Cannot use variable $%S twice: The same variable cannt be mentionned twice in the use part of a closure definition.

		:og:type: article
		:og:title: Cannot use variable $%S twice
		:og:description: The same variable cannt be mentionned twice in the use part of a closure definition
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-variable-%24%25s-twice.html

Description
___________
 
The same variable cannt be mentionned twice in the use part of a closure definition. This would mean the same argument is defined twice, which is useless.

Example
_______

.. code-block:: php

   <?php
   
   $fn = function() use ($a, &$a) {
       $a = 2;
   };
   
   ?>


Literal Examples
****************
+ Cannot use variable $a twice

Solutions
_________

+ Make all variables mentionned in the use expression unique (with or without the reference).
