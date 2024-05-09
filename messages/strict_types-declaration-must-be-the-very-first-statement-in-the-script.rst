.. _strict_types-declaration-must-be-the-very-first-statement-in-the-script:

strict_types declaration must be the very first statement in the script
-----------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			strict_types declaration must be the very first statement in the script: This error appears when the declare statement is not the first statement in the file.

Description
___________
 
This error appears when the declare statement is not the first statement in the file. 

It appears even when non-executing statement are placed before it, such as forgotten characters before the opening tag, any kind of operations in PHP commands, including definitions, namespaces, etc.

Other declare() calls may appears before the strict_types one, though. Also, PHP uses this error with the other declare statement, such as ``ticks`` or ``encoding``. They are very rare though.


Example
_______

.. code-block:: php

   Here<?php
   
   $a = 1;
   declare(strict_types = 1);
   
   ?>

Solutions
_________

+ Check if any characters are left before the opening PHP tag.
+ Move the declare after the PHP opening tag.
