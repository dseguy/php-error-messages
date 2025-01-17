.. _syntax-error,-unexpected-token-"extends",-expecting-"{":

syntax error, unexpected token "extends", expecting "{"
-------------------------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "extends", expecting "{": When declaring a class, the ``extends`` keyword must appear before the ``implements`` one.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: syntax error, unexpected token &quot;extends&quot;, expecting &quot;{&quot;
		:og:description: When declaring a class, the ``extends`` keyword must appear before the ``implements`` one
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22extends%22%2C-expecting-%22%7B%22.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "extends", expecting "{"
	:twitter:description: syntax error, unexpected token "extends", expecting "{": When declaring a class, the ``extends`` keyword must appear before the ``implements`` one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
When declaring a class, the ``extends`` keyword must appear before the ``implements`` one.

Example
_______

.. code-block:: php

   <?php
   class X implements I1, I2 extends W {}
   
   ?>

Solutions
_________

+ Move the ``extends`` keyword, and its class, right after the name of the class, and before the ``implements`` keyword.
+ Remove the ``extends`` keyword.
