.. _multiple-%s-modifiers-are-not-allowed:

Multiple %s modifiers are not allowed
-------------------------------------
 
.. meta::
	:description:
		Multiple %s modifiers are not allowed: A single modifier keyword (``final``, ``static``, ``readonly``, or a visibility keyword such as ``public``, ``protected``, ``private``) is enough to apply that property to a class member.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Multiple %s modifiers are not allowed
	:og:description: A single modifier keyword (``final``, ``static``, ``readonly``, or a visibility keyword such as ``public``, ``protected``, ``private``) is enough to apply that property to a class member
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/multiple-%25s-modifiers-are-not-allowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiple %s modifiers are not allowed
	:twitter:description: Multiple %s modifiers are not allowed: A single modifier keyword (``final``, ``static``, ``readonly``, or a visibility keyword such as ``public``, ``protected``, ``private``) is enough to apply that property to a class member
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/multiple-%s-modifiers-are-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/multiple-%s-modifiers-are-not-allowed.html","name":"Multiple %s modifiers are not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 08:13:13 +0000","dateModified":"Wed, 15 Jul 2026 08:13:13 +0000","description":"A single modifier keyword (``final``, ``static``, ``readonly``, or a visibility keyword such as ``public``, ``protected``, ``private``) is enough to apply that property to a class member","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multiple-%s-modifiers-are-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A single modifier keyword (``final``, ``static``, ``readonly``, or a visibility keyword such as ``public``, ``protected``, ``private``) is enough to apply that property to a class member. Repeating the same kind of modifier twice in a declaration is redundant and rejected by the parser.

This is a generic, templated message: the concrete modifier name takes the place of ``%s``. There are dedicated, more specific messages for each modifier family: ``final``, ``static``, ``readonly``, and the access-type (visibility) modifiers.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       final final function foo() {}
   }
   
   ?>


Literal Examples
****************
+ Multiple final modifiers are not allowed
+ Multiple static modifiers are not allowed
+ Multiple readonly modifiers are not allowed
+ Multiple access type modifiers are not allowed

Solutions
_________

+ Remove the duplicate modifier, keeping only one occurrence.

Related Error Messages
______________________

+ :ref:`multiple-final-modifiers-are-not-allowed`
+ :ref:`multiple-static-modifiers-are-not-allowed`
+ :ref:`multiple-readonly-modifiers-are-not-allowed`
+ :ref:`multiple-access-type-modifiers-are-not-allowed`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
