.. _method-%s::%s-cannot-be-#[--nodiscard]-error_type:

Method %s::%s cannot be #[\\NoDiscard] error_type
-------------------------------------------------
 
.. meta::
	:description:
		Method %s::%s cannot be #[\\NoDiscard] error_type: The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Method %s::%s cannot be #[\\NoDiscard] error_type
	:og:description: The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s-cannot-be-%23%5B--nodiscard%5D-error_type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method %s::%s cannot be #[\\NoDiscard] error_type
	:twitter:description: Method %s::%s cannot be #[\\NoDiscard] error_type: The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s-cannot-be-#[--nodiscard]-error_type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s-cannot-be-#[--nodiscard]-error_type.html","name":"Method %s::%s cannot be #[\\\\NoDiscard] error_type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 20:56:21 +0000","dateModified":"Fri, 17 Jul 2026 20:56:21 +0000","description":"The ``#[\\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method-%s::%s-cannot-be-#[--nodiscard]-error_type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``#[\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value. A number of magic methods -- ``__clone``, ``__set``, ``__unset``, ``__wakeup`` and ``__unserialize`` -- are expected to always behave as if declared ``: void``: PHP calls them purely for their side effect and never looks at, or exposes, any value they might return. Marking one of them ``#[\NoDiscard]`` is therefore meaningless, and PHP rejects it at compile time.

This is the same wording as the message used for ``__construct`` and ``__destruct`` (see method-%s::%s-cannot-be-#[--nodiscard]), but produced by a different internal check: those two magic methods are not even allowed to declare a return type at all, whereas the methods covered here are simply always treated as implicitly ``void``. The trailing 'error_type' in this file's identifier is an artifact of how this catalog extracts messages from the PHP source; it is not part of the text PHP actually displays.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       #[\NoDiscard]
       public function __clone() {}
   }
   
   $x = new X();
   clone $x;
   
   ?>


Literal Examples
****************
+ Method X::__clone cannot be #[\NoDiscard]
+ Method X::__set cannot be #[\NoDiscard]
+ Method X::__unset cannot be #[\NoDiscard]
+ Method X::__wakeup cannot be #[\NoDiscard]
+ Method X::__unserialize cannot be #[\NoDiscard]

Solutions
_________

+ Remove the ``#[\NoDiscard]`` attribute from the magic method.
+ If a discardable-value warning is needed, move the logic to a regular, non-magic method and mark that one instead.

Related Error Messages
______________________

+ :ref:`method-%s::%s-cannot-be-#[--nodiscard]`
+ :ref:`a-void-%s-does-not-return-a-value`
+ :ref:`a-never-returning-%s-does-not-return-a-value`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
