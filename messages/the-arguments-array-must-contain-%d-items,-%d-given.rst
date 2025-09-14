.. _the-arguments-array-must-contain-%d-items,-%d-given:

The arguments array must contain %d items, %d given
---------------------------------------------------
 
.. meta::
	:description:
		The arguments array must contain %d items, %d given: When using vsprintf(), the second argument is an array which must hold the same number of elements than there are placeholders in the format string (aka, the first argument).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The arguments array must contain %d items, %d given
	:og:description: When using vsprintf(), the second argument is an array which must hold the same number of elements than there are placeholders in the format string (aka, the first argument)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-arguments-array-must-contain-%25d-items%2C-%25d-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The arguments array must contain %d items, %d given
	:twitter:description: The arguments array must contain %d items, %d given: When using vsprintf(), the second argument is an array which must hold the same number of elements than there are placeholders in the format string (aka, the first argument)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-arguments-array-must-contain-%d-items,-%d-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-arguments-array-must-contain-%d-items,-%d-given.html","name":"The arguments array must contain %d items, %d given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 15:45:40 +0000","dateModified":"Sun, 14 Sep 2025 15:45:40 +0000","description":"When using vsprintf(), the second argument is an array which must hold the same number of elements than there are placeholders in the format string (aka, the first argument)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-arguments-array-must-contain-%d-items,-%d-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When using vsprintf(), the second argument is an array which must hold the same number of elements than there are placeholders in the format string (aka, the first argument).

Example
_______

.. code-block:: php

   <?php
   
   var_dump(vsprintf("%04d-%02d-%02d", []));
   
   ?>


Literal Examples
****************
+ The arguments array must contain 3 items, 0 given

Solutions
_________

+ Add the needed elements to the array.
+ Remove the superfluous placeholders in the format string.
