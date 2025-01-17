.. _constant-%s-already-defined:

Constant %s already defined
---------------------------
 
.. meta::
	:description:
		Constant %s already defined: When a global constant is defined again, PHP reports a warning, and ignores the second definition.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Constant %s already defined
	:og:description: When a global constant is defined again, PHP reports a warning, and ignores the second definition
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/constant-%25s-already-defined.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant %s already defined
	:twitter:description: Constant %s already defined: When a global constant is defined again, PHP reports a warning, and ignores the second definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
When a global constant is defined again, PHP reports a warning, and ignores the second definition.

This error applies to global constants only: class constants emit a fatal error, and a different message.


Example
_______

.. code-block:: php

   <?php
   
   const A = 1;
   const A = 2;
   
   echo A;
   
   define('A', 3);
   echo A;
   
   ?>


Literal Examples
****************
+ Constant A already defined

Solutions
_________

+ Remove the second definition.
+ Remove the first definition.
+ Fix the name of one of the constants.
+ Check if there are no missing namespace.

Related Error Messages
______________________

+ :ref:`cannot-redefine-class-constant`
