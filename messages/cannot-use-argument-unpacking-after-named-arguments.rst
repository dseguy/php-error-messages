.. _cannot-use-argument-unpacking-after-named-arguments:

Cannot use argument unpacking after named arguments
---------------------------------------------------
 
.. meta::
	:description:
		Cannot use argument unpacking after named arguments: PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use argument unpacking after named arguments
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-argument-unpacking-after-named-arguments.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use argument unpacking after named arguments
	:twitter:description: Cannot use argument unpacking after named arguments: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-argument-unpacking-after-named-arguments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-argument-unpacking-after-named-arguments.html","name":"Cannot use argument unpacking after named arguments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:10 +0000","dateModified":"Thu, 30 Jul 2026 07:30:10 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-argument-unpacking-after-named-arguments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.1 allows named arguments and argument unpacking (...$array) to be combined in the same call, but the unpacked array must come before any named arguments. Argument unpacking supplies its own set of positions/keys, and allowing it to appear after arguments already identified by name would make the resulting parameter order ambiguous, so it is rejected at compile time based on the call's syntax alone.

Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b, $c) {}
   
   $rest = ['c' => 3];
   
   foo(a: 1, b: 2, ...$rest);
   
   ?>

Solutions
_________

+ Move the unpacked array before the named arguments, adjusting keys as needed: foo(...$rest, a: 1, b: 2);
+ Turn the unpacked array's values into individual named arguments.

Related Error Messages
______________________

+ :ref:`cannot-combine-named-arguments-and-argument-unpacking`
+ :ref:`cannot-use-positional-argument-after-named-argument-during-unpacking`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
