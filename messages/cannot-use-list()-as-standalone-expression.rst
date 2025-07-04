.. _cannot-use-list()-as-standalone-expression:

Cannot use list() as standalone expression
------------------------------------------
 
.. meta::
	:description:
		Cannot use list() as standalone expression: list() assigns values from an array to a list of variables (or data containers).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use list() as standalone expression
	:og:description: list() assigns values from an array to a list of variables (or data containers)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-list%28%29-as-standalone-expression.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use list() as standalone expression
	:twitter:description: Cannot use list() as standalone expression: list() assigns values from an array to a list of variables (or data containers)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-list()-as-standalone-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-list()-as-standalone-expression.html","name":"Cannot use list() as standalone expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Jul 2025 04:47:19 +0000","dateModified":"Wed, 02 Jul 2025 04:47:19 +0000","description":"list() assigns values from an array to a list of variables (or data containers)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-list()-as-standalone-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
list() assigns values from an array to a list of variables (or data containers). As such, it is a write operation, which should be on the left side of an assignment, or in other write positions, such as a foreach() blind variables or inside another list. list() cannot be used in a read position, as in the code example: list() as not result.

list() also has a short syntax version, ``[]``. That short syntax is converted to an array automatically, so it doesn't yield any error then.

Example
_______

.. code-block:: php

   <?php
   
   [list($a)];
   
   // the second [] is not a list() but an array().
   [[$a]]; 
   
   ?>

Solutions
_________

+ Use array() or [] instead.
