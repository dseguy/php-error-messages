.. _strict_types-declaration-must-have-0-or-1-as-its-value:

strict_types declaration must have 0 or 1 as its value
------------------------------------------------------
 
.. meta::
	:description:
		strict_types declaration must have 0 or 1 as its value: The ``strict_types`` pragma is a switch: ``0`` keeps the usual weak typing (with type coercion for scalar type declarations), and ``1`` turns on strict typing for the current file.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: strict_types declaration must have 0 or 1 as its value
	:og:description: The ``strict_types`` pragma is a switch: ``0`` keeps the usual weak typing (with type coercion for scalar type declarations), and ``1`` turns on strict typing for the current file
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/strict_types-declaration-must-have-0-or-1-as-its-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strict_types declaration must have 0 or 1 as its value
	:twitter:description: strict_types declaration must have 0 or 1 as its value: The ``strict_types`` pragma is a switch: ``0`` keeps the usual weak typing (with type coercion for scalar type declarations), and ``1`` turns on strict typing for the current file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-have-0-or-1-as-its-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-have-0-or-1-as-its-value.html","name":"strict_types declaration must have 0 or 1 as its value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:26 +0000","dateModified":"Mon, 27 Jul 2026 16:18:26 +0000","description":"The ``strict_types`` pragma is a switch: ``0`` keeps the usual weak typing (with type coercion for scalar type declarations), and ``1`` turns on strict typing for the current file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-have-0-or-1-as-its-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``strict_types`` pragma is a switch: ``0`` keeps the usual weak typing (with type coercion for scalar type declarations), and ``1`` turns on strict typing for the current file. No other value makes sense, so PHP only accepts the literal integers ``0`` and ``1``; anything else, including ``true``, ``false``, or any other number, is rejected.

Example
_______

.. code-block:: php

   <?php
   
   declare(strict_types = 2);
   
   ?>


Literal Examples
****************
+ strict_types declaration must have 0 or 1 as its value

Solutions
_________

+ Use ``1`` to enable strict typing, or ``0`` to keep weak typing.

Related Error Messages
______________________

+ :ref:`declare(%s)-value-must-be-a-literal`
+ :ref:`strict_types-declaration-must-be-the-very-first-statement-in-the-script`
+ :ref:`strict_types-declaration-must-not`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
