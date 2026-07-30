.. _static::class-cannot-be-used-for-compile-time-class-name-resolution:

static::class cannot be used for compile-time class name resolution
-------------------------------------------------------------------
 
.. meta::
	:description:
		static::class cannot be used for compile-time class name resolution: static::class resolves to the class name of whichever subclass is actually in scope at runtime, through late static binding.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: static::class cannot be used for compile-time class name resolution
	:og:description: static::class resolves to the class name of whichever subclass is actually in scope at runtime, through late static binding
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/static%3A%3Aclass-cannot-be-used-for-compile-time-class-name-resolution.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: static::class cannot be used for compile-time class name resolution
	:twitter:description: static::class cannot be used for compile-time class name resolution: static::class resolves to the class name of whichever subclass is actually in scope at runtime, through late static binding
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static::class-cannot-be-used-for-compile-time-class-name-resolution.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static::class-cannot-be-used-for-compile-time-class-name-resolution.html","name":"static::class cannot be used for compile-time class name resolution","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:49 +0000","dateModified":"Thu, 30 Jul 2026 07:30:49 +0000","description":"static::class resolves to the class name of whichever subclass is actually in scope at runtime, through late static binding","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static::class-cannot-be-used-for-compile-time-class-name-resolution.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
static::class resolves to the class name of whichever subclass is actually in scope at runtime, through late static binding. A class constant, on the other hand, is resolved once and shared identically by the declaring class and every class that inherits it, so it cannot hold a value that is meant to vary per subclass. self::class is accepted in the same spot because it never varies.

Example
_______

.. code-block:: php

   <?php
   
   class Base {
   	const NAME = static::class;
   }
   
   ?>

Solutions
_________

+ Use self::class if a fixed class name is acceptable.
+ Expose it through a method instead: public static function name(): string { return static::class; }

Related Error Messages
______________________

+ :ref:`static::-"-is-not-allowed-in-compile-time-constants`
+ :ref:`static-"-is-not-allowed-in-compile-time-constants`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
