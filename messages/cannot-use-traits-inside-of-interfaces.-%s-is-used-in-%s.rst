.. _cannot-use-traits-inside-of-interfaces.-%s-is-used-in-%s:

Cannot use traits inside of interfaces. %s is used in %s
--------------------------------------------------------
 
.. meta::
	:description:
		Cannot use traits inside of interfaces. %s is used in %s: The command ``use`` cannot be used in an interface to include a trait.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use traits inside of interfaces. %s is used in %s
	:og:description: The command ``use`` cannot be used in an interface to include a trait
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-traits-inside-of-interfaces.-%25s-is-used-in-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use traits inside of interfaces. %s is used in %s
	:twitter:description: Cannot use traits inside of interfaces. %s is used in %s: The command ``use`` cannot be used in an interface to include a trait
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-traits-inside-of-interfaces.-%s-is-used-in-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-traits-inside-of-interfaces.-%s-is-used-in-%s.html","name":"Cannot use traits inside of interfaces. %s is used in %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Sep 2025 17:11:10 +0000","dateModified":"Mon, 15 Sep 2025 17:11:10 +0000","description":"The command ``use`` cannot be used in an interface to include a trait","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-traits-inside-of-interfaces.-%s-is-used-in-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The command ``use`` cannot be used in an interface to include a trait. The trait must be included at the class level, or in another trait.

Example
_______

.. code-block:: php

   <?php
   
   interface I {
       use T;
   }
   
   ?>


Literal Examples
****************
+ Cannot use traits inside of interfaces. T is used in I

Solutions
_________

+ Use the trait in the target classes.
