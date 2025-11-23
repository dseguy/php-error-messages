.. _enums-are-not-compatible-with-%s:

Enums are not compatible with %s
--------------------------------
 
.. meta::
	:description:
		Enums are not compatible with %s: It is not possible to use an object as backing for the arrayobject class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Enums are not compatible with %s
	:og:description: It is not possible to use an object as backing for the arrayobject class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/enums-are-not-compatible-with-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enums are not compatible with %s
	:twitter:description: Enums are not compatible with %s: It is not possible to use an object as backing for the arrayobject class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enums-are-not-compatible-with-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enums-are-not-compatible-with-%s.html","name":"Enums are not compatible with %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Nov 2025 20:43:39 +0000","dateModified":"Fri, 14 Nov 2025 20:43:39 +0000","description":"It is not possible to use an object as backing for the arrayobject class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enums-are-not-compatible-with-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to use an object as backing for the arrayobject class. Enums cases are objects, of the type of the enum. Hence, this is not possible.

Example
_______

.. code-block:: php

   <?php
   
   enum Foo {
       case Bar;
   }
   
   new ArrayObject(Foo::Bar);
   
   ?>

Solutions
_________

+ Put the value of the case in an array.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
