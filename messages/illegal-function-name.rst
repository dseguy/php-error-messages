.. _illegal-function-name:

Illegal function name
---------------------
 
.. meta::
	:description:
		Illegal function name: This error messages appears when there is an attempt to create a closure from a function, whose name is not a valid function.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Illegal function name
	:og:description: This error messages appears when there is an attempt to create a closure from a function, whose name is not a valid function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/illegal-function-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Illegal function name
	:twitter:description: Illegal function name: This error messages appears when there is an attempt to create a closure from a function, whose name is not a valid function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/illegal-function-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/illegal-function-name.html","name":"Illegal function name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Nov 2025 21:07:07 +0000","dateModified":"Tue, 04 Nov 2025 21:07:07 +0000","description":"This error messages appears when there is an attempt to create a closure from a function, whose name is not a valid function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/illegal-function-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error messages appears when there is an attempt to create a closure from a function, whose name is not a valid function. Numbers, such as float and integers, are not valid function name, and yield this error. Negative numbers, and other types yield a distinct error.

Example
_______

.. code-block:: php

   <?php
   
   const Closure = (0)(...);
   
   var_dump(Closure);
   
   ?>

Solutions
_________

+ Use a string, instead of a number. Check that the string is a valid name for a function or a static method.
+ Ensures that the name is a static expression, and that each element may be resolved at compile time.

Related Error Messages
______________________

+ :ref:`cannot-use-dynamic-function-name-in-constant-expression`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
