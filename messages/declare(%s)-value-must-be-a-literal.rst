.. _declare(%s)-value-must-be-a-literal:

declare(%s) value must be a literal
-----------------------------------
 
.. meta::
	:description:
		declare(%s) value must be a literal: ``declare()`` directives (``ticks``, ``encoding``, ``strict_types``) are processed by the compiler while the file is being parsed, before any code actually runs.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: declare(%s) value must be a literal
	:og:description: ``declare()`` directives (``ticks``, ``encoding``, ``strict_types``) are processed by the compiler while the file is being parsed, before any code actually runs
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/declare%28%25s%29-value-must-be-a-literal.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: declare(%s) value must be a literal
	:twitter:description: declare(%s) value must be a literal: ``declare()`` directives (``ticks``, ``encoding``, ``strict_types``) are processed by the compiler while the file is being parsed, before any code actually runs
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/declare(%s)-value-must-be-a-literal.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/declare(%s)-value-must-be-a-literal.html","name":"declare(%s) value must be a literal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:10 +0000","dateModified":"Mon, 27 Jul 2026 16:18:10 +0000","description":"``declare()`` directives (``ticks``, ``encoding``, ``strict_types``) are processed by the compiler while the file is being parsed, before any code actually runs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/declare(%s)-value-must-be-a-literal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``declare()`` directives (``ticks``, ``encoding``, ``strict_types``) are processed by the compiler while the file is being parsed, before any code actually runs. At that point, constants, variables, and function calls are not yet available, so only a literal value, such as ``1``, ``0``, or a quoted string, can be given as the directive's value.

This applies equally to every directive: ``ticks``, ``encoding``, and ``strict_types`` all require a literal.

Example
_______

.. code-block:: php

   <?php
   
   define('TICK_VALUE', 1);
   
   declare(ticks = TICK_VALUE) {
       echo 'Done';
   }
   
   ?>


Literal Examples
****************
+ declare(ticks) value must be a literal
+ declare(strict_types) value must be a literal
+ declare(encoding) value must be a literal

Solutions
_________

+ Replace the constant, variable, or expression with its literal value.

Related Error Messages
______________________

+ :ref:`strict_types-declaration-must-have-0-or-1-as-its-value`
+ :ref:`strict_types-declaration-must-be-the-very-first-statement-in-the-script`
+ :ref:`encoding-declaration-pragma-must-be`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
