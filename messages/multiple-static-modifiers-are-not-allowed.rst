.. _multiple-static-modifiers-are-not-allowed:

Multiple static modifiers are not allowed
-----------------------------------------
 
.. meta::
	:description:
		Multiple static modifiers are not allowed: Only one static option is necessary to make a property static.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Multiple static modifiers are not allowed
	:og:description: Only one static option is necessary to make a property static
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/multiple-static-modifiers-are-not-allowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiple static modifiers are not allowed
	:twitter:description: Multiple static modifiers are not allowed: Only one static option is necessary to make a property static
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/multiple-static-modifiers-are-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/multiple-static-modifiers-are-not-allowed.html","name":"Multiple static modifiers are not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 05 Jan 2025 10:39:13 +0000","dateModified":"Sun, 05 Jan 2025 10:39:13 +0000","description":"Only one static option is necessary to make a property static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multiple-static-modifiers-are-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Only one static option is necessary to make a property static. Two is overkill, and not needed, so PHP reports it.

There are similar messages for multiple readonly, or multiple static.

Multiple static on a closure or arrow function leads to a parse error. 


Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private static static A $b;
   
   	private static static function a() {}
   }
   
   static static function () {}; 
   
   ?>

Solutions
_________

+ Drop the extra static, and keep only one.
+ Drop all the static options.

Related Error Messages
______________________

+ :ref:`multiple-readonly-modifiers-are-not-allowed`
+ :ref:`multiple-access-type-modifiers-are-not-allowed`
