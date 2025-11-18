.. _argument-unpacking-in-constant-expressions-is-not-supported:

Argument unpacking in constant expressions is not supported
-----------------------------------------------------------
 
.. meta::
	:description:
		Argument unpacking in constant expressions is not supported: It is not possible to use the ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Argument unpacking in constant expressions is not supported
	:og:description: It is not possible to use the ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/argument-unpacking-in-constant-expressions-is-not-supported.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Argument unpacking in constant expressions is not supported
	:twitter:description: Argument unpacking in constant expressions is not supported: It is not possible to use the ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-unpacking-in-constant-expressions-is-not-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-unpacking-in-constant-expressions-is-not-supported.html","name":"Argument unpacking in constant expressions is not supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 20:23:18 +0000","dateModified":"Sun, 16 Nov 2025 20:23:18 +0000","description":"It is not possible to use the ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/argument-unpacking-in-constant-expressions-is-not-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to use the ``...`` operator in an static constant expression, with the ``new`` operator. 

On the other hand, it is possible to use it inside arrays to spread the elements. It is also possible to use it in a closure definition.

Example
_______

.. code-block:: php

   <?php
   
   const A = [1,2,3];
   
   function foo($a = new C(...A)) {}
   
   function goo($a = [...A, ...A])) {}
   
   
   ?>

Solutions
_________

+ Access the array elements individually.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
