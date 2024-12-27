.. _syntax-error,-unexpected-identifier-"%s",-expecting-variable:

syntax error, unexpected identifier "%s", expecting variable
------------------------------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected identifier "%s", expecting variable: A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression.

		:og:type: article
		:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting variable
		:og:description: A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-variable.html

Description
___________
 
A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression.

Example
_______

.. code-block:: php

   <?php
   
   foreach($a as b) {}
   
   ?>

Solutions
_________

+ Add the missing ``$`` sign, to make the identifier an array.
