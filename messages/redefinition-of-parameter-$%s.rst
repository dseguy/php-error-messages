.. _redefinition-of-parameter-\$%s:

Redefinition of parameter $%s
-----------------------------
 
	.. meta::
		:description:
			Redefinition of parameter $%s: Parameters must all have distinct names in a method signature.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Redefinition of parameter $%s
		:og:description: Parameters must all have distinct names in a method signature
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/redefinition-of-parameter-%24%25s.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Redefinition of parameter $%s
	:twitter:description: Redefinition of parameter $%s: Parameters must all have distinct names in a method signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
Parameters must all have distinct names in a method signature. Before PHP 7.0, no error was emitted, and the last parameter's value was used. In PHP 7.0 and more recent, it is a compilation error.

Example
_______

.. code-block:: php

   <?php
   
   function foo($b, $b, $b) {}
   
   ?>


Literal Examples
****************
+ Redefinition of parameter $b

Solutions
_________

+ Use all different names for the parameters.
