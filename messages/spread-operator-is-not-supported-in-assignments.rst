.. _spread-operator-is-not-supported-in-assignments:

Spread operator is not supported in assignments
-----------------------------------------------
 
.. meta::
	:description:
		Spread operator is not supported in assignments: The spread operator cannot be used with the list() operator.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Spread operator is not supported in assignments
	:og:description: The spread operator cannot be used with the list() operator
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/spread-operator-is-not-supported-in-assignments.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Spread operator is not supported in assignments
	:twitter:description: Spread operator is not supported in assignments: The spread operator cannot be used with the list() operator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/spread-operator-is-not-supported-in-assignments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/spread-operator-is-not-supported-in-assignments.html","name":"Spread operator is not supported in assignments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Oct 2024 20:49:57 +0000","dateModified":"Sun, 27 Oct 2024 09:36:12 +0000","description":"The spread operator cannot be used with the list() operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/spread-operator-is-not-supported-in-assignments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The spread operator cannot be used with the list() operator. It may be used to spread an array into arguments, but it is not possible to do the same when assigning elements inside an array.

Example
_______

.. code-block:: php

   <?php
   
   [...$x] = [1, 2, 3];
   
   list(...$x) = array(1, 2, 3);
   
   [$x[0], , $x['a']] = [1, 2, 3];
   
   ?>

Solutions
_________

+ Write the full list of targets in the list operator: it might be array elements, and the array nor the elements needs to pre-exists.
