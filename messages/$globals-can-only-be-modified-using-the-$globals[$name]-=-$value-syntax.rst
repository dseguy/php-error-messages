.. _\$globals-can-only-be-modified-using-the-\$globals[\$name]-=-\$value-syntax:

$GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax
-----------------------------------------------------------------------
 
	.. meta::
		:description:
			$GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax: Since PHP 8.

		:og:type: article
		:og:title: $GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax
		:og:description: Since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%24globals-can-only-be-modified-using-the-%24globals%5B%24name%5D-%3D-%24value-syntax.html

Description
___________
 
Since PHP 8.1, it is not possible to replace ``$GLOBALS`` entirely. It has to be modified at the index level, and not as a whole. 

The error message is a bit misleading: on the spot operations with index are still possible, such as ``++`` or ``array_map`` or ``array_walk``.

This means that ``$GLOBALS['index']`` may be written, while ``$GLOBALS``  cannot. 

``$GLOBALS['index']`` and ``$GLOBALS`` can still be used for reading.


Example
_______

.. code-block:: php

   <?php
   
   $GLOBALS = [];
   
   // That is also OK
   $x = 3;
   echo $GLOBALS['x']++;
   
   ?>

Solutions
_________

+ Make a loop over ``$GLOBALS`` and update each index individually.
+ Avoid updating ``$GLOBALS``: keep a copy in another variable.
