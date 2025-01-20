.. _syntax-error,-unexpected-token-"::":

syntax error, unexpected token "::"
-----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "::": In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;::&quot;
	:og:description: In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3A%3A%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "::"
	:twitter:description: syntax error, unexpected token "::": In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant. 

By extension, the ``or`` keyword cannot be used in static object notations, such as calling a constant, or a static method or property.

This error may arise with other keywords, such as ``switch``, ``and``, ``foreach``, etc, for similar reasons. It also may happen when a new keyword is reserved by PHP, between two versions.


Example
_______

.. code-block:: php

   <?php
   
   1 or::A;
   
   ?>

Solutions
_________

+ Rename the class with a PHP non-keyword.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-'::',-expecting-'('`
