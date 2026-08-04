.. _static-"-is-not-allowed-in-compile-time-constants:

static" is not allowed in compile-time constants
------------------------------------------------
 
.. meta::
	:description:
		static" is not allowed in compile-time constants: &quot;New in initializers&quot; (PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: static&quot; is not allowed in compile-time constants
	:og:description: &quot;New in initializers&quot; (PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/static-%22-is-not-allowed-in-compile-time-constants.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: static" is not allowed in compile-time constants
	:twitter:description: static" is not allowed in compile-time constants: "New in initializers" (PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static-\"-is-not-allowed-in-compile-time-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static-\"-is-not-allowed-in-compile-time-constants.html","name":"static\" is not allowed in compile-time constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:06:38 +0000","dateModified":"Tue, 04 Aug 2026 19:06:38 +0000","description":"\"New in initializers\" (PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static-\"-is-not-allowed-in-compile-time-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
"New in initializers" (PHP 8.1) allows new expressions in constant-expression contexts, such as default parameter values, as long as the class being instantiated is fixed and unambiguous: a literal class name, self, or parent. static refers to the class actually used at call time (late static binding), which can differ for every subclass, so it cannot be resolved once and for all at the point the initializer is compiled, and is rejected.

Example
_______

.. code-block:: php

   <?php
   
   class Point {
   	public function __construct(
   		public readonly self $origin = new static()
   	) {}
   }
   
   ?>

Solutions
_________

+ Use self if the intent is to always instantiate the declaring class.
+ Move the instantiation into the constructor or method body instead, where late static binding works normally: $origin ??= new static();

Related Error Messages
______________________

+ :ref:`static::-"-is-not-allowed-in-compile-time-constants`
+ :ref:`static::class-cannot-be-used-for-compile-time-class-name-resolution`
+ :ref:`cannot-use-dynamic-class-name-in-constant-expression`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
