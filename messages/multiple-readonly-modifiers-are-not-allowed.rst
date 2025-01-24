.. _multiple-readonly-modifiers-are-not-allowed:

Multiple readonly modifiers are not allowed
-------------------------------------------
 
.. meta::
	:description:
		Multiple readonly modifiers are not allowed: Only one readonly option is necessary to make a property read-only.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Multiple readonly modifiers are not allowed
	:og:description: Only one readonly option is necessary to make a property read-only
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/multiple-readonly-modifiers-are-not-allowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiple readonly modifiers are not allowed
	:twitter:description: Multiple readonly modifiers are not allowed: Only one readonly option is necessary to make a property read-only
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/multiple-readonly-modifiers-are-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/multiple-readonly-modifiers-are-not-allowed.html","name":"Multiple readonly modifiers are not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 05 Jan 2025 10:39:06 +0000","dateModified":"Sun, 05 Jan 2025 10:39:06 +0000","description":"Only one readonly option is necessary to make a property read-only","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multiple-readonly-modifiers-are-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Only one readonly option is necessary to make a property read-only. Two is overkill, and not needed, so PHP reports it.

There are similar messages for multiple visibility, or multiple static.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private readonly readonly A $b;
   }
   
   readonly readonly class Y {
   }
   
   ?>

Solutions
_________

+ Drop the extra readonly, and keep only one.
+ Drop all the readonly options.

Related Error Messages
______________________

+ :ref:`multiple-static-modifiers-are-not-allowed`
+ :ref:`multiple-access-type-modifiers-are-not-allowed`
