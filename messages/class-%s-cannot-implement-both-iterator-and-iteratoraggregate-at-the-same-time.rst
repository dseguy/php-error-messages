.. _class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time:

Class %s cannot implement both Iterator and IteratorAggregate at the same time
------------------------------------------------------------------------------
 
.. meta::
	:description:
		Class %s cannot implement both Iterator and IteratorAggregate at the same time: This error appears when a class uses two or more interfaces, which are incompatible with one another.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s cannot implement both Iterator and IteratorAggregate at the same time
	:og:description: This error appears when a class uses two or more interfaces, which are incompatible with one another
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s cannot implement both Iterator and IteratorAggregate at the same time
	:twitter:description: Class %s cannot implement both Iterator and IteratorAggregate at the same time: This error appears when a class uses two or more interfaces, which are incompatible with one another
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html","name":"Class %s cannot implement both Iterator and IteratorAggregate at the same time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Jul 2025 17:42:06 +0000","dateModified":"Tue, 01 Jul 2025 17:42:06 +0000","description":"This error appears when a class uses two or more interfaces, which are incompatible with one another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when a class uses two or more interfaces, which are incompatible with one another. The incompatibility is based on name conflicts: two interfaces have a method with the same name.

There is a distinct error for constants. There is the same message for properties, since PHP 8.4.

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

Related Error Messages
______________________

+ :ref:`%s-%s-inherits-both-%s::%s-and-%s::%s`
