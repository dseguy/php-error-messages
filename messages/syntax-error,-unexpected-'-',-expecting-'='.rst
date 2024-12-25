.. _syntax-error,-unexpected-'-',-expecting-'=':

syntax error, unexpected '-', expecting '='
-------------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected '-', expecting '=': When defining a constant, the constant name must be valid.

		:og:type: article
		:og:title: syntax error, unexpected &#039;-&#039;, expecting &#039;=&#039;
		:og:description: When defining a constant, the constant name must be valid
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27-%27%2C-expecting-%27%3D%27.html

Description
___________
 
When defining a constant, the constant name must be valid. It must be satisfying the following regex: ``/[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/``. When an unexpected character appears, it yields this errors, mentioning the erroneous character first.

This error appears for global constant, written with ``const`` or for class constants, inside a class.

The unexpected character may have a lot of variations, in particular any non-letter or non-figure characters. Check the regex for more options.


Example
_______

.. code-block:: php

   <?php
   
   const A-B = 1;
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Remove the ``-`` in the constant name.
+ Remove the ``unexpected`` character in the constant name.
+ Remove the constant definition.
