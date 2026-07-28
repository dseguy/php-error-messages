.. _strict_types-declaration-must-not:

strict_types declaration must not
---------------------------------
 
.. meta::
	:description:
		strict_types declaration must not: ``declare()`` supports a block form for most directives, such as ``declare(ticks = 1) { .
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: strict_types declaration must not
	:og:description: ``declare()`` supports a block form for most directives, such as ``declare(ticks = 1) { 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/strict_types-declaration-must-not.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strict_types declaration must not
	:twitter:description: strict_types declaration must not: ``declare()`` supports a block form for most directives, such as ``declare(ticks = 1) { 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-not.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-not.html","name":"strict_types declaration must not","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:30 +0000","dateModified":"Mon, 27 Jul 2026 16:18:30 +0000","description":"``declare()`` supports a block form for most directives, such as ``declare(ticks = 1) { ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-not.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``declare()`` supports a block form for most directives, such as ``declare(ticks = 1) { ... }``, which scopes the setting to the code inside the block. ``strict_types`` is different: it is a compile-time, whole-file setting, not something that can be toggled for a portion of the script. Because of that, the block form is rejected outright.

The full message reads: ``strict_types declaration must not use block mode``.

Example
_______

.. code-block:: php

   <?php
   
   declare(strict_types = 1) {
       var_dump(strlen('abc'));
   }
   
   ?>


Literal Examples
****************
+ strict_types declaration must not use block mode

Solutions
_________

+ Remove the curly braces, and use ``declare(strict_types = 1);`` as a simple statement.

Related Error Messages
______________________

+ :ref:`strict_types-declaration-must-be-the-very-first-statement-in-the-script`
+ :ref:`strict_types-declaration-must-have-0-or-1-as-its-value`
+ :ref:`strict_types-declaration-must-be`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
