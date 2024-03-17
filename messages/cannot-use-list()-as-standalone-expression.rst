.. _cannot-use-list()-as-standalone-expression:

Cannot use list() as standalone expression
------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot use list() as standalone expression: list() assigns values from an array to a list of variables (or data containers).

Description
___________
 
list() assigns values from an array to a list of variables (or data containers). As such, it is a write operation, which should be on the left side of an assignement, or in other write positions, such as a foreach() blind variables or inside another list. list() cannot be used in a read position, as in the code example: list() as not result.

list() also has a short syntax version, ``[]``. That short syntax is converted to an array automatically, so it doesn't yield any error then. 



Example
_______

.. code-block:: php

   <?php
   
   [list($a)];
   
   // the second [] is not a list() but an array().
   [[$a]]; 
   
   ?>

Solutions
_________

+ Use array() or [] instead.
