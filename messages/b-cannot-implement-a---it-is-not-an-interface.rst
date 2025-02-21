.. _b-cannot-implement-a---it-is-not-an-interface:

b cannot implement a - it is not an interface
---------------------------------------------
 
.. meta::
	:description:
		b cannot implement a - it is not an interface: implements is a keyword that only applies to interfaces.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: b cannot implement a - it is not an interface
	:og:description: implements is a keyword that only applies to interfaces
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/b-cannot-implement-a---it-is-not-an-interface.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: b cannot implement a - it is not an interface
	:twitter:description: b cannot implement a - it is not an interface: implements is a keyword that only applies to interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/b-cannot-implement-a---it-is-not-an-interface.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/b-cannot-implement-a---it-is-not-an-interface.html","name":"b cannot implement a - it is not an interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"implements is a keyword that only applies to interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/b-cannot-implement-a---it-is-not-an-interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
implements is a keyword that only applies to interfaces. Classes, traits and enum are all triggering this message.

The error message also applies with the extends keyword, when building an inteface.

Example
_______

.. code-block:: php

   <?php
   
   class A {}
   
   class B implements A {}
   
   interface B extends A {}
   
   ?>

Solutions
_________

+ Use an interface instead of a class.
+ Convert the class to an interface, then implements this interface.
+ Change the implemented or extended class to an actual interface.
