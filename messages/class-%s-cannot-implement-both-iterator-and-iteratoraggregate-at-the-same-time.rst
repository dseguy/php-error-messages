.. _class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time:

Class %s cannot implement both Iterator and IteratorAggregate at the same time
------------------------------------------------------------------------------
 
.. meta::
	:description:
		Class %s cannot implement both Iterator and IteratorAggregate at the same time: These two interfaces are incompatible one another.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s cannot implement both Iterator and IteratorAggregate at the same time
	:og:description: These two interfaces are incompatible one another
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s cannot implement both Iterator and IteratorAggregate at the same time
	:twitter:description: Class %s cannot implement both Iterator and IteratorAggregate at the same time: These two interfaces are incompatible one another
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html","name":"Class %s cannot implement both Iterator and IteratorAggregate at the same time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"These two interfaces are incompatible one another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
These two interfaces are incompatible one another. There must be only one of them.

Example
_______

.. code-block:: php

   <?php
   
   class A implements Iterator, IteratorAggregate {}
   
   ?>


Literal Examples
****************
+ Class A cannot implement both Iterator and IteratorAggregate at the same time

Solutions
_________

+ Choose one or the other interface.
+ Use the interface that is compatible with the parent classes.
