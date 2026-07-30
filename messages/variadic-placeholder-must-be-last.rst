.. _variadic-placeholder-must-be-last:

Variadic placeholder must be last
---------------------------------
 
.. meta::
	:description:
		Variadic placeholder must be last: The .
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Variadic placeholder must be last
	:og:description: The 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/variadic-placeholder-must-be-last.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variadic placeholder must be last
	:twitter:description: Variadic placeholder must be last: The 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/variadic-placeholder-must-be-last.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/variadic-placeholder-must-be-last.html","name":"Variadic placeholder must be last","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:57 +0000","dateModified":"Thu, 30 Jul 2026 07:30:57 +0000","description":"The ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/variadic-placeholder-must-be-last.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ... placeholder used for partial function application (PHP 8.5) introduces the parameters of the resulting Closure, made of every parameter of the original function that was not already given a fixed value. Because everything before it is treated as a fixed, bound argument, the placeholder itself must come last in the call; PHP has no way to bind arguments positioned after it.

Example
_______

.. code-block:: php

   <?php
   
   function add($a, $b, $c) {
   	return $a + $b + $c;
   }
   
   $curried = add(..., 2, 3);
   
   ?>

Solutions
_________

+ Put every fixed argument before ..., and keep ... as the final argument: add(1, 2, ...).

Related Error Messages
______________________

+ :ref:`variadic-placeholder-may-only-appear-once`
+ :ref:`cannot-combine-partial-application-and-unpacking`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
