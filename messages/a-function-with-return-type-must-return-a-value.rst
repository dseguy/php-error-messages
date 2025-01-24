.. _a-function-with-return-type-must-return-a-value:

A function with return type must return a value
-----------------------------------------------
 
.. meta::
	:description:
		A function with return type must return a value: When a function has a return type, it must have a return command in its block, which must also have an argument.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A function with return type must return a value
	:og:description: When a function has a return type, it must have a return command in its block, which must also have an argument
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-function-with-return-type-must-return-a-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A function with return type must return a value
	:twitter:description: A function with return type must return a value: When a function has a return type, it must have a return command in its block, which must also have an argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-function-with-return-type-must-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-function-with-return-type-must-return-a-value.html","name":"A function with return type must return a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jan 2025 15:33:47 +0000","dateModified":"Wed, 15 Jan 2025 15:33:47 +0000","description":"When a function has a return type, it must have a return command in its block, which must also have an argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/a-function-with-return-type-must-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a function has a return type, it must have a return command in its block, which must also have an argument. In this illustration, return has no argument, so it is return void, and this is detected at compilation time. 

Note that PHP lint doesn't check the type of the returned value at linting time: any return value makes this error go away. Type is checked at execution time, and only when the expression is used: it may trigger a 'Return value must be of type int, string returned'.

This also applies to closures, methods, arrow functions.

This error is displayed with any return that doesn't have an argument. They might be several of them in a single function.


Example
_______

.. code-block:: php

   <?php
   function foo(): int {
   	return ;
   }
   
   ?>

Solutions
_________

+ Add a returned value to all the return command.
+ Check all the return commands for returned values.
+ Remove the return type.

Related Error Messages
______________________

+ :ref:`return-value-of-%s%s%s()-must-%s%s%s,-%s%s-returned`
+ :ref:`%s%s%s():-return-value-must-be-of-type-%s,-%s-returned`
