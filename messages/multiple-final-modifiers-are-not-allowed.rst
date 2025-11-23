.. _multiple-final-modifiers-are-not-allowed:

Multiple final modifiers are not allowed
----------------------------------------
 
.. meta::
	:description:
		Multiple final modifiers are not allowed: One mention of the ``final`` option is sufficient to make a method so.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Multiple final modifiers are not allowed
	:og:description: One mention of the ``final`` option is sufficient to make a method so
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/multiple-final-modifiers-are-not-allowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiple final modifiers are not allowed
	:twitter:description: Multiple final modifiers are not allowed: One mention of the ``final`` option is sufficient to make a method so
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/multiple-final-modifiers-are-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/multiple-final-modifiers-are-not-allowed.html","name":"Multiple final modifiers are not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 21:01:05 +0000","dateModified":"Fri, 07 Nov 2025 21:01:05 +0000","description":"One mention of the ``final`` option is sufficient to make a method so","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multiple-final-modifiers-are-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
One mention of the ``final`` option is sufficient to make a method so.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       final final function foo() {}
   }
   
   ?>

Solutions
_________

+ Keep only one mention of ``final``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
