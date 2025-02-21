.. _array_product():-multiplication-is-not-supported-on-type-object:

array_product(): Multiplication is not supported on type object
---------------------------------------------------------------
 
.. meta::
	:description:
		array_product(): Multiplication is not supported on type object: array_product() multiplies each element in the first argument, with each other.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: array_product(): Multiplication is not supported on type object
	:og:description: array_product() multiplies each element in the first argument, with each other
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array_product%28%29%3A-multiplication-is-not-supported-on-type-object.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_product(): Multiplication is not supported on type object
	:twitter:description: array_product(): Multiplication is not supported on type object: array_product() multiplies each element in the first argument, with each other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array_product():-multiplication-is-not-supported-on-type-object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array_product():-multiplication-is-not-supported-on-type-object.html","name":"array_product(): Multiplication is not supported on type object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"array_product() multiplies each element in the first argument, with each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_product():-multiplication-is-not-supported-on-type-object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
array_product() multiplies each element in the first argument, with each other. This is a valid operation for integer, floats, numeric strings, booleans and null, as they can be cast to numbers. 

This is not the case for arrays, objects, non-numeric strings or resources, which yield this warning, and are omitted in the operation.

Objects are not turned to string before being cast to numeric.

Until PHP 8.3, the omission of invalid argument was a silent behavior.

Example
_______

.. code-block:: php

   <?php
   
   var_dump(array_product([new stdClass()] )); // returns 1
   
   var_dump(array_product([new stdClass(), 3] )); // returns 99
   
   ?>

Solutions
_________

+ Filter out all values in the first argument not actually numeric: aka, they can't be cast to integer or float without error.
+ Filter out all objects inside the first argument.

Related Error Messages
______________________

+ :ref:`array_product():-multiplication-is-not-supported-on-type-array`
+ :ref:`array_product():-multiplication-is-not-supported-on-type-string`
