.. _cannot-use-variable-\$%s-twice:

Cannot use variable $%S twice
-----------------------------
 
	.. meta::
		:description lang=en:
			Cannot use variable $%S twice: The same variable cannt be mentionned twice in the use part of a closure definition.

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

Solutions
_________

+ Make all variables mentionned in the use expression unique (with or without the reference).
