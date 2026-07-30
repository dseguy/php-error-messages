.. _variadic-placeholder-may-only-appear-once:

Variadic placeholder may only appear once
-----------------------------------------
 
.. meta::
	:description:
		Variadic placeholder may only appear once: The .
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Variadic placeholder may only appear once
	:og:description: The 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/variadic-placeholder-may-only-appear-once.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variadic placeholder may only appear once
	:twitter:description: Variadic placeholder may only appear once: The 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/variadic-placeholder-may-only-appear-once.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/variadic-placeholder-may-only-appear-once.html","name":"Variadic placeholder may only appear once","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:53 +0000","dateModified":"Thu, 30 Jul 2026 07:30:53 +0000","description":"The ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/variadic-placeholder-may-only-appear-once.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ... placeholder used for partial function application (PHP 8.5) stands for all of the function's remaining, not-yet-supplied parameters, which become the parameters of the resulting Closure. Using it more than once in the same call is ambiguous, since there is only one set of "remaining parameters" to represent, so PHP allows at most one placeholder per call.

Example
_______

.. code-block:: php

   <?php
   
   function add($a, $b, $c) {
   	return $a + $b + $c;
   }
   
   $curried = add(..., ...);
   
   ?>

Solutions
_________

+ Use a single ... placeholder per call; wrap the result in an extra closure for any additional free parameters.

Related Error Messages
______________________

+ :ref:`variadic-placeholder-must-be-last`
+ :ref:`cannot-combine-partial-application-and-unpacking`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
