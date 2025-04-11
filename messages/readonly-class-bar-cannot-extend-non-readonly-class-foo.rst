.. _readonly-class-bar-cannot-extend-non-readonly-class-foo:

Readonly class Bar cannot extend non-readonly class Foo
-------------------------------------------------------
 
.. meta::
	:description:
		Readonly class Bar cannot extend non-readonly class Foo: A readonly class cannot extends a non-readonly class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Readonly class Bar cannot extend non-readonly class Foo
	:og:description: A readonly class cannot extends a non-readonly class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/readonly-class-bar-cannot-extend-non-readonly-class-foo.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readonly class Bar cannot extend non-readonly class Foo
	:twitter:description: Readonly class Bar cannot extend non-readonly class Foo: A readonly class cannot extends a non-readonly class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/readonly-class-bar-cannot-extend-non-readonly-class-foo.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/readonly-class-bar-cannot-extend-non-readonly-class-foo.html","name":"Readonly class Bar cannot extend non-readonly class Foo","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A readonly class cannot extends a non-readonly class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly-class-bar-cannot-extend-non-readonly-class-foo.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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

Solutions
_________

+ Make both classes readonly.
+ Make both classes non-readonly.
+ Make both classes non-readonly and apply readonly per properties.
