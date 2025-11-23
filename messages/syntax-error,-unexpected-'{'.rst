.. _syntax-error,-unexpected-'{':

syntax error, unexpected '{'
----------------------------
 
.. meta::
	:description:
		syntax error, unexpected '{': This error arise when the old curly braces syntax is used to access an element in an array.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;{&#039;
	:og:description: This error arise when the old curly braces syntax is used to access an element in an array
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%7B%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected '{'
	:twitter:description: syntax error, unexpected '{': This error arise when the old curly braces syntax is used to access an element in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'{'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'{'.html","name":"syntax error, unexpected '{'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Nov 2025 19:00:15 +0000","dateModified":"Wed, 19 Nov 2025 19:00:15 +0000","description":"This error arise when the old curly braces syntax is used to access an element in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'{'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error arise when the old curly braces syntax is used to access an element in an array. This syntax was deprecated in PHP 7.x and removed entirely in 8.0. It also was left as a syntax error since PHP 8.3.

Example
_______

.. code-block:: php

   <?php
   
   $array[1]{0};
   
   ?>

Solutions
_________

+ Use the square brackets to access array elements.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
