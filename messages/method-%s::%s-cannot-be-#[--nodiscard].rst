.. _method-%s::%s-cannot-be-#[--nodiscard]:

Method %s::%s cannot be #[\\NoDiscard]
--------------------------------------
 
.. meta::
	:description:
		Method %s::%s cannot be #[\\NoDiscard]: The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Method %s::%s cannot be #[\\NoDiscard]
	:og:description: The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s-cannot-be-%23%5B--nodiscard%5D.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method %s::%s cannot be #[\\NoDiscard]
	:twitter:description: Method %s::%s cannot be #[\\NoDiscard]: The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s-cannot-be-#[--nodiscard].html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s-cannot-be-#[--nodiscard].html","name":"Method %s::%s cannot be #[\\\\NoDiscard]","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 08:13:08 +0000","dateModified":"Wed, 15 Jul 2026 08:13:08 +0000","description":"The ``#[\\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method-%s::%s-cannot-be-#[--nodiscard].html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value. Certain magic methods, such as ``__construct``, ``__destruct``, ``__clone`` and ``__wakeup``, are always invoked for their side effect and never return a usable value to the caller (``new`` returns the object itself, not the constructor's return value), so attaching ``#[\NoDiscard]`` to them is meaningless and rejected at compile time.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       #[\NoDiscard]
       public function __construct() {}
   }
   
   new X();
   
   ?>


Literal Examples
****************
+ Method X::__construct cannot be #[\NoDiscard]

Solutions
_________

+ Remove the ``#[\NoDiscard]`` attribute from the magic method.
+ If a discardable-value warning is needed, move the logic to a regular, non-magic method and mark that one instead.

Related Error Messages
______________________

+ :ref:`a-void-%s-does-not-return-a-value`
+ :ref:`a-never-returning-%s-does-not-return-a-value`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
