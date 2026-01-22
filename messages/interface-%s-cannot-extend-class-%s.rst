.. _interface-%s-cannot-extend-class-%s:

Interface %s cannot extend class %s
-----------------------------------
 
.. meta::
	:description:
		Interface %s cannot extend class %s: An interface must extends another interface.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Interface %s cannot extend class %s
	:og:description: An interface must extends another interface
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/interface-%25s-cannot-extend-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface %s cannot extend class %s
	:twitter:description: Interface %s cannot extend class %s: An interface must extends another interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interface-%s-cannot-extend-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interface-%s-cannot-extend-class-%s.html","name":"Interface %s cannot extend class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 16:08:59 +0000","dateModified":"Sun, 14 Sep 2025 16:08:59 +0000","description":"An interface must extends another interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface-%s-cannot-extend-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An interface must extends another interface. It cannot extends a class, nor a trait, nor an enum.

Also, a class cannot extends an interface: it must implement it.

Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   interface I extends X {} 
   
   ?>


Literal Examples
****************
+ Interface I cannot extend class C

Solutions
_________

+ Turn the original class into an interface.
+ Make the original interface into an class.
+ Split the class into a class and an interface, and extends the latter.
