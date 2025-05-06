.. _cannot-assign-reference-to-non-referenceable-value:

Cannot assign reference to non referenceable value
--------------------------------------------------
 
.. meta::
	:description:
		Cannot assign reference to non referenceable value: It is possible to assign values by references, only when the right operand is already stored in a variable, or similar.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot assign reference to non referenceable value
	:og:description: It is possible to assign values by references, only when the right operand is already stored in a variable, or similar
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-assign-reference-to-non-referenceable-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot assign reference to non referenceable value
	:twitter:description: Cannot assign reference to non referenceable value: It is possible to assign values by references, only when the right operand is already stored in a variable, or similar
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-reference-to-non-referenceable-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-reference-to-non-referenceable-value.html","name":"Cannot assign reference to non referenceable value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Apr 2025 20:40:23 +0000","dateModified":"Mon, 21 Apr 2025 20:40:23 +0000","description":"It is possible to assign values by references, only when the right operand is already stored in a variable, or similar","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-assign-reference-to-non-referenceable-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is possible to assign values by references, only when the right operand is already stored in a variable, or similar.

Example
_______

.. code-block:: php

   <?php
   
   list(&$x) = [1, 2]; 
   
   $array = [1,2];
   list(&$x, ) = $array 
   
   ?>

Solutions
_________

+ Store the operand in a variable (or equivalent).
+ Assign values individually.
