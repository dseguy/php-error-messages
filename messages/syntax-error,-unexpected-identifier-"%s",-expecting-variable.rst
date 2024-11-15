.. _syntax-error,-unexpected-identifier-"%s",-expecting-variable:

syntax error, unexpected identifier "%s", expecting variable
------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			syntax error, unexpected identifier "%s", expecting variable: A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression.

Description
___________
 
A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression.

Example
_______

.. code-block:: php

   <?php
   
   foreach($a as b) {}
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Add the missing ``$`` sign, to make the identifier an array.
