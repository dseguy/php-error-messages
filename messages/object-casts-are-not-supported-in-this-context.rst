.. _object-casts-are-not-supported-in-this-context:

Object casts are not supported in this context
----------------------------------------------
 
.. meta::
	:description:
		Object casts are not supported in this context: Cast operators are not supported in a static constant expression.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Object casts are not supported in this context
	:og:description: Cast operators are not supported in a static constant expression
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/object-casts-are-not-supported-in-this-context.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object casts are not supported in this context
	:twitter:description: Object casts are not supported in this context: Cast operators are not supported in a static constant expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-casts-are-not-supported-in-this-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-casts-are-not-supported-in-this-context.html","name":"Object casts are not supported in this context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 21:10:28 +0000","dateModified":"Fri, 07 Nov 2025 21:10:28 +0000","description":"Cast operators are not supported in a static constant expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/object-casts-are-not-supported-in-this-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Cast operators are not supported in a static constant expression. They look like any other operator, such as ``+`` or ``.``, but they require data manipulations which are incompatible with constant expressions.

This applies to all casts operations: ``(int)``, ``(string)``, ``(bool)``, ``(array)``, ``(object)``, ``(void)``.


Example
_______

.. code-block:: php

   <?php
   class X {
       public $foo = (object) [];
   }
   ?>

Solutions
_________

+ Create a value directly with the correct type.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
