.. _array_merge()-expects-at-least-1-parameter,-0-given:

array_merge() expects at least 1 parameter, 0 given
---------------------------------------------------
 
.. meta::
	:description:
		array_merge() expects at least 1 parameter, 0 given: Until PHP 7.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: array_merge() expects at least 1 parameter, 0 given
	:og:description: Until PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array_merge%28%29-expects-at-least-1-parameter%2C-0-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_merge() expects at least 1 parameter, 0 given
	:twitter:description: array_merge() expects at least 1 parameter, 0 given: Until PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array_merge()-expects-at-least-1-parameter,-0-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array_merge()-expects-at-least-1-parameter,-0-given.html","name":"array_merge() expects at least 1 parameter, 0 given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Until PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_merge()-expects-at-least-1-parameter,-0-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 7.4, array_merge() always needed at least one argument to execute. This means that using the variadic operator on an empty array yielded no argument, and then, an error.

Since PHP 7.4, array_merge() handles graciously the case of no arguments, by returning an empty array, and not more error.

This applies to array_merge() and array_merge_recursive().

Example
_______

.. code-block:: php

   <?php
   
   $array = [];
   
   $array2 = array_merge(...[]);
   
   ?>

Solutions
_________

+ Check for non-empty array before using it with array_merge().
