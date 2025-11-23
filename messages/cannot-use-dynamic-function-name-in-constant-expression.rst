.. _cannot-use-dynamic-function-name-in-constant-expression:

Cannot use dynamic function name in constant expression
-------------------------------------------------------
 
.. meta::
	:description:
		Cannot use dynamic function name in constant expression: This error appears when the name of the function cannot be entirely resolve at compile time.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use dynamic function name in constant expression
	:og:description: This error appears when the name of the function cannot be entirely resolve at compile time
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-dynamic-function-name-in-constant-expression.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use dynamic function name in constant expression
	:twitter:description: Cannot use dynamic function name in constant expression: This error appears when the name of the function cannot be entirely resolve at compile time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-dynamic-function-name-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-dynamic-function-name-in-constant-expression.html","name":"Cannot use dynamic function name in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Nov 2025 21:10:00 +0000","dateModified":"Tue, 04 Nov 2025 21:10:00 +0000","description":"This error appears when the name of the function cannot be entirely resolve at compile time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-dynamic-function-name-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when the name of the function cannot be entirely resolve at compile time. Here, the array cannot be turned into a function or static method name. This also happens for variations on the name, such as using a boolean, an array, or any expression that cannot be resolved at compilation time.

Example
_______

.. code-block:: php

   <?php
   
   const Closure1 = ([])(...);
   const Closure2 = (-1)(...);
   const Closure3 = (true)(...);
   
   var_dump(Closure);
   
   ?>

Solutions
_________

+ Use a string for the name of the function or static method.

Related Error Messages
______________________

+ :ref:`illegal-function-name`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
