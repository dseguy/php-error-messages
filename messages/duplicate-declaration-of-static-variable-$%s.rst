.. _duplicate-declaration-of-static-variable-\$%s:

Duplicate declaration of static variable $%s
--------------------------------------------
 
.. meta::
	:description:
		Duplicate declaration of static variable $%s: It is not allowed anymore to declare twice a static variable in a method.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Duplicate declaration of static variable $%s
	:og:description: It is not allowed anymore to declare twice a static variable in a method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/duplicate-declaration-of-static-variable-%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Duplicate declaration of static variable $%s
	:twitter:description: Duplicate declaration of static variable $%s: It is not allowed anymore to declare twice a static variable in a method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/duplicate-declaration-of-static-variable-$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/duplicate-declaration-of-static-variable-$%s.html","name":"Duplicate declaration of static variable $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Feb 2025 14:22:53 +0000","dateModified":"Sun, 23 Feb 2025 14:22:53 +0000","description":"It is not allowed anymore to declare twice a static variable in a method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/duplicate-declaration-of-static-variable-$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not allowed anymore to declare twice a static variable in a method. This is spotted at compile time.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
   	static $a;
   	
   	++$a;
   	
   	static $a;
   }
   
   ?>


Literal Examples
****************
+ Duplicate declaration of static variable $a

Solutions
_________

+ Remove all the static declarations, but one: keep the earliest one.
