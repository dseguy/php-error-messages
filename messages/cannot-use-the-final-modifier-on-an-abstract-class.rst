.. _cannot-use-the-final-modifier-on-an-abstract-class:

Cannot use the final modifier on an abstract class
--------------------------------------------------
 
.. meta::
	:description:
		Cannot use the final modifier on an abstract class: The options ``final`` and ``abstract`` are mutually exclusive.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use the final modifier on an abstract class
	:og:description: The options ``final`` and ``abstract`` are mutually exclusive
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-final-modifier-on-an-abstract-class.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use the final modifier on an abstract class
	:twitter:description: Cannot use the final modifier on an abstract class: The options ``final`` and ``abstract`` are mutually exclusive
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-final-modifier-on-an-abstract-class.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-final-modifier-on-an-abstract-class.html","name":"Cannot use the final modifier on an abstract class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 21:00:55 +0000","dateModified":"Fri, 07 Nov 2025 21:00:55 +0000","description":"The options ``final`` and ``abstract`` are mutually exclusive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-the-final-modifier-on-an-abstract-class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The options ``final`` and ``abstract`` are mutually exclusive. The first one prevents any redefinition by children, while the second one requests an implementation, and as such, a redefinition, in children classes.

It is the same message, whatever the order of the options.

Example
_______

.. code-block:: php

   <?php
   
   final abstract class X {}
   
   abstract final class Z {}
   
   ?>

Solutions
_________

+ Drop the ``abstract`` option.
+ Drop the ``final`` option.
+ Drop both the options.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
