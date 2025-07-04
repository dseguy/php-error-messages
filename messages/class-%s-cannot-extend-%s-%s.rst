.. _class-%s-cannot-extend-%s-%s:

Class %s cannot extend %s %s
----------------------------
 
.. meta::
	:description:
		Class %s cannot extend %s %s: A class that is marked ``final`` cannot be extended.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s cannot extend %s %s
	:og:description: A class that is marked ``final`` cannot be extended
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-extend-%25s-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s cannot extend %s %s
	:twitter:description: Class %s cannot extend %s %s: A class that is marked ``final`` cannot be extended
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-extend-%s-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-extend-%s-%s.html","name":"Class %s cannot extend %s %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Jul 2025 17:35:37 +0000","dateModified":"Tue, 01 Jul 2025 17:35:37 +0000","description":"A class that is marked ``final`` cannot be extended","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-extend-%s-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A class that is marked ``final`` cannot be extended. This error applies to a class that tries to use a ``final`` class as parent.

Example
_______

.. code-block:: php

   <?php
   
   final class X {}
   
   class Y extends X {}
   
   ?>


Literal Examples
****************
+ Class T cannot extend class X

Solutions
_________

+ Remove the ``final`` keyword on the parent class.
+ Use composition in the intended child class.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Classes/CantExtendFinal <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/CantExtendFinal.html>`_.
