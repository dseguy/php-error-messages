.. _static::-"-is-not-allowed-in-compile-time-constants:

static::\" is not allowed in compile-time constants
---------------------------------------------------
 
.. meta::
	:description:
		static::\" is not allowed in compile-time constants: Class constants are meant to hold a single, fixed value shared identically by the declaring class and every subclass that inherits it.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: static::\&quot; is not allowed in compile-time constants
	:og:description: Class constants are meant to hold a single, fixed value shared identically by the declaring class and every subclass that inherits it
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/static%3A%3A-%22-is-not-allowed-in-compile-time-constants.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: static::\" is not allowed in compile-time constants
	:twitter:description: static::\" is not allowed in compile-time constants: Class constants are meant to hold a single, fixed value shared identically by the declaring class and every subclass that inherits it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static::-\"-is-not-allowed-in-compile-time-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static::-\"-is-not-allowed-in-compile-time-constants.html","name":"static::\\\" is not allowed in compile-time constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:45 +0000","dateModified":"Thu, 30 Jul 2026 07:30:45 +0000","description":"Class constants are meant to hold a single, fixed value shared identically by the declaring class and every subclass that inherits it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static::-\"-is-not-allowed-in-compile-time-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Class constants are meant to hold a single, fixed value shared identically by the declaring class and every subclass that inherits it. Referencing static:: inside a constant expression would make the value depend on late static binding, i.e. on whichever subclass actually reads it, which contradicts a constant's fixed nature, so PHP rejects it at compile time.

Example
_______

.. code-block:: php

   <?php
   
   class Base {
   	const A = 1;
   	const B = static::A * 2;
   }
   
   ?>

Solutions
_________

+ Use self:: instead if the intent is to always refer to the declaring class's own member.
+ Compute the value in a static method instead of a constant.

Related Error Messages
______________________

+ :ref:`static-"-is-not-allowed-in-compile-time-constants`
+ :ref:`static::class-cannot-be-used-for-compile-time-class-name-resolution`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
