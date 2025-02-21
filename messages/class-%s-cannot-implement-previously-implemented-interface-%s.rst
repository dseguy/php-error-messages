.. _class-%s-cannot-implement-previously-implemented-interface-%s:

Class %s cannot implement previously implemented interface %s
-------------------------------------------------------------
 
.. meta::
	:description:
		Class %s cannot implement previously implemented interface %s: It is not allowed to use several times the same interface in a ``implements`` clause, for classes, or ``extends`` for interfaces.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s cannot implement previously implemented interface %s
	:og:description: It is not allowed to use several times the same interface in a ``implements`` clause, for classes, or ``extends`` for interfaces
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-implement-previously-implemented-interface-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s cannot implement previously implemented interface %s
	:twitter:description: Class %s cannot implement previously implemented interface %s: It is not allowed to use several times the same interface in a ``implements`` clause, for classes, or ``extends`` for interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-implement-previously-implemented-interface-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-implement-previously-implemented-interface-%s.html","name":"Class %s cannot implement previously implemented interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is not allowed to use several times the same interface in a ``implements`` clause, for classes, or ``extends`` for interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-implement-previously-implemented-interface-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not allowed to use several times the same interface in a ``implements`` clause, for classes, or ``extends`` for interfaces.

The message is a bit confusing, since the interface is not already implemented, but rather, used in the implements clause. In fact, PHP checks first the list of names of the clause, then it checks the signatures of the methods.

This error message is dependent on the ``use`` expresion, and also the calls to ``class_alias()``.

Example
_______

.. code-block:: php

   <?php
   
   use I as J;
   
   interface I {}
   
   // Multiple ways to reference an interface
   class Foo implements I, \I, J {}
   
   // This applies to interfaces too
   interface Bar extends I, \I, J {}
   
   ?>


Literal Examples
****************
+ Class foo cannot implement previously implemented interface i

Solutions
_________

+ Remove the duplicate interface name.
