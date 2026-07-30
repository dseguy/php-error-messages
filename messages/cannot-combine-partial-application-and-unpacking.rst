.. _cannot-combine-partial-application-and-unpacking:

Cannot combine partial application and unpacking
------------------------------------------------
 
.. meta::
	:description:
		Cannot combine partial application and unpacking: PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot combine partial application and unpacking
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-combine-partial-application-and-unpacking.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot combine partial application and unpacking
	:twitter:description: Cannot combine partial application and unpacking: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-combine-partial-application-and-unpacking.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-combine-partial-application-and-unpacking.html","name":"Cannot combine partial application and unpacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:29:30 +0000","dateModified":"Thu, 30 Jul 2026 07:29:30 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-combine-partial-application-and-unpacking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.5 extends the first-class callable syntax with partial application: a lone ... placeholder as the last argument of a call turns it into a Closure over the remaining, not-yet-supplied parameters. The same ... token is already used for argument unpacking (spreading an array's values as arguments), so a call that both spreads an array and ends with the placeholder is ambiguous between "spread this array, then partially apply" and a typo, and PHP rejects it outright.

Example
_______

.. code-block:: php

   <?php
   
   function add($a, $b, $c) {
   	return $a + $b + $c;
   }
   
   $args = [1, 2];
   
   $curried = add(...$args, ...);
   
   ?>

Solutions
_________

+ Wrap the call in an explicit closure instead: $curried = fn($c) => add(...$args, $c);

Related Error Messages
______________________

+ :ref:`variadic-placeholder-may-only-appear-once`
+ :ref:`variadic-placeholder-must-be-last`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
