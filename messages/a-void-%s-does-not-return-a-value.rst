.. _a-void-%s-does-not-return-a-value:

A void %s does not return a value, but #[\\NoDiscard] requires a return value
-----------------------------------------------------------------------------
 
.. meta::
	:description:
		A void %s does not return a value, but #[\\NoDiscard] requires a return value: The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A void %s does not return a value, but #[\\NoDiscard] requires a return value
	:og:description: The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-void-%25s-does-not-return-a-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A void %s does not return a value, but #[\\NoDiscard] requires a return value
	:twitter:description: A void %s does not return a value, but #[\\NoDiscard] requires a return value: The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-void-%s-does-not-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-void-%s-does-not-return-a-value.html","name":"A void %s does not return a value, but #[\\\\NoDiscard] requires a return value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 08:13:04 +0000","dateModified":"Wed, 15 Jul 2026 08:13:04 +0000","description":"The ``#[\\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/a-void-%s-does-not-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value. A ``void``-returning function never produces a value to begin with, so requiring the caller to use one is a contradiction, and PHP rejects the combination at compile time.

Example
_______

.. code-block:: php

   <?php
   
   #[\NoDiscard]
   function foo(): void {}
   
   ?>


Literal Examples
****************
+ A void function does not return a value, but #[\NoDiscard] requires a return value
+ A void method does not return a value, but #[\NoDiscard] requires a return value

Solutions
_________

+ Remove the ``void`` return type, and actually return a meaningful value.
+ Remove the ``#[\NoDiscard]`` attribute, since there is nothing to discard.

Related Error Messages
______________________

+ :ref:`a-void-%s-must-not-return-a-value`
+ :ref:`a-never-returning-%s-does-not-return-a-value`
+ :ref:`method-%s::%s-cannot-be-#[--nodiscard]`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
