.. _readonly-class-%s-cannot-extend-non-readonly-class-%s:

Readonly class %s cannot extend non-readonly class %s
-----------------------------------------------------
 
.. meta::
	:description:
		Readonly class %s cannot extend non-readonly class %s: A readonly class cannot extends a non-readonly class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Readonly class %s cannot extend non-readonly class %s
	:og:description: A readonly class cannot extends a non-readonly class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/readonly-class-%25s-cannot-extend-non-readonly-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readonly class %s cannot extend non-readonly class %s
	:twitter:description: Readonly class %s cannot extend non-readonly class %s: A readonly class cannot extends a non-readonly class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/readonly-class-%s-cannot-extend-non-readonly-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/readonly-class-%s-cannot-extend-non-readonly-class-%s.html","name":"Readonly class %s cannot extend non-readonly class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 14:32:38 +0000","dateModified":"Mon, 13 Jul 2026 14:32:38 +0000","description":"A readonly class cannot extends a non-readonly class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly-class-%s-cannot-extend-non-readonly-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A readonly class cannot extends a non-readonly class; a non-readonly class cannot extends a readonly class. Both classes must be readonly or non-readonly to be able to extends one another. This is due to readonly being applied to all available properties, which is ambiguous with class hierarchies.

Example
_______

.. code-block:: php

   <?php
   
   class Foo
   {
   }
   
   readonly class Bar extends Foo
   {
   }
   
   ?>


Literal Examples
****************
+ Readonly class Foo cannot extend non-readonly class Bar

Solutions
_________

+ Make both classes readonly.
+ Make both classes non-readonly.
+ Make both classes non-readonly and apply readonly per properties.

Related Error Messages
______________________

+ :ref:`non-readonly-class-%s-cannot-extend-readonly-class-%s`
