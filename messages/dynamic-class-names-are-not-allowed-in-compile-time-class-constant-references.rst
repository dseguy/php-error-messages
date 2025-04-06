.. _dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references:

Dynamic class names are not allowed in compile-time class constant references
-----------------------------------------------------------------------------
 
.. meta::
	:description:
		Dynamic class names are not allowed in compile-time class constant references: It is not possible to create a constant while using a variable, or similar containers.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Dynamic class names are not allowed in compile-time class constant references
	:og:description: It is not possible to create a constant while using a variable, or similar containers
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic class names are not allowed in compile-time class constant references
	:twitter:description: Dynamic class names are not allowed in compile-time class constant references: It is not possible to create a constant while using a variable, or similar containers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html","name":"Dynamic class names are not allowed in compile-time class constant references","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Apr 2025 19:30:28 +0000","dateModified":"Wed, 02 Apr 2025 19:12:52 +0000","description":"It is not possible to create a constant while using a variable, or similar containers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to create a constant while using a variable, or similar containers. The expression must be static.

Example
_______

.. code-block:: php

   <?php
   
   $foo = 'a';
   const A = $foo::C;
   
   ?>

Solutions
_________

+ Use define().
+ Make the value expression static.
