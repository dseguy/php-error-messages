.. _instantiation-of-class-closure-is-not-allowed:

Instantiation of class Closure is not allowed
---------------------------------------------
 
.. meta::
	:description:
		Instantiation of class Closure is not allowed: The ``Closure`` class is a PHP native class, which cannot be directly instantiated.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Instantiation of class Closure is not allowed
	:og:description: The ``Closure`` class is a PHP native class, which cannot be directly instantiated
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/instantiation-of-class-closure-is-not-allowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Instantiation of class Closure is not allowed
	:twitter:description: Instantiation of class Closure is not allowed: The ``Closure`` class is a PHP native class, which cannot be directly instantiated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/instantiation-of-class-closure-is-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/instantiation-of-class-closure-is-not-allowed.html","name":"Instantiation of class Closure is not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 19:41:14 +0000","dateModified":"Sun, 16 Nov 2025 19:41:14 +0000","description":"The ``Closure`` class is a PHP native class, which cannot be directly instantiated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instantiation-of-class-closure-is-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``Closure`` class is a PHP native class, which cannot be directly instantiated. It must be created with other syntaxes, such as the closure syntax, ``function () {};``, first class callable ``foo(...)``, or arrow functions ``fn () => 1;``.

Example
_______

.. code-block:: php

   <?php
   
   new Closure();
   
   ?>

Solutions
_________

+ Use the closure syntax.
+ Use the arrow function syntax.
+ Use the first class callable syntax.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
