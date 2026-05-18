.. _cannot-create-closure-for-new-expression:

Cannot create Closure for new expression
----------------------------------------
 
.. meta::
	:description:
		Cannot create Closure for new expression: When using the ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot create Closure for new expression
	:og:description: When using the ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-create-closure-for-new-expression.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot create Closure for new expression
	:twitter:description: Cannot create Closure for new expression: When using the ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-closure-for-new-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-closure-for-new-expression.html","name":"Cannot create Closure for new expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 18 May 2026 10:03:37 +0000","dateModified":"Mon, 18 May 2026 10:03:37 +0000","description":"When using the ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-create-closure-for-new-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When using the ``...`` ellpsis operator as an argument, it creates a closure, based on the current function or method. While the syntax can be linted by PHP, it is not possible to use it with a ``new`` operator.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __construct() {}
   }
   
   $closure = new X(...);
   
   ?>

Solutions
_________

+ Make a closure that takes the arguments, and relay them to the ``new`` operator.
+ Create a named constructor, and make a closure from this.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
