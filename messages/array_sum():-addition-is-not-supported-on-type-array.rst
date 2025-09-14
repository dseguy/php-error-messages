.. _array_sum():-addition-is-not-supported-on-type-array:

array_sum(): Addition is not supported on type array
----------------------------------------------------
 
.. meta::
	:description:
		array_sum(): Addition is not supported on type array: array_sum() adds each element in the first argument, with each other.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: array_sum(): Addition is not supported on type array
	:og:description: array_sum() adds each element in the first argument, with each other
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array_sum%28%29%3A-addition-is-not-supported-on-type-array.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_sum(): Addition is not supported on type array
	:twitter:description: array_sum(): Addition is not supported on type array: array_sum() adds each element in the first argument, with each other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array_sum():-addition-is-not-supported-on-type-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array_sum():-addition-is-not-supported-on-type-array.html","name":"array_sum(): Addition is not supported on type array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Sep 2025 20:42:52 +0000","dateModified":"Tue, 02 Sep 2025 20:42:52 +0000","description":"array_sum() adds each element in the first argument, with each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_sum():-addition-is-not-supported-on-type-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
array_sum() adds each element in the first argument, with each other. This is a valid operation for integers, floats, numeric strings, booleans and null, as they can be cast to numbers. 

This is not the case for arrays, objects, non-numeric strings or resources, which yield this warning, and are omitted in the operation.

Until PHP 8.3, the omission of invalid argument was a silent behavior.

Example
_______

.. code-block:: php

   <?php
   
   var_dump(array_sum([[]] )); // returns 0
   
   var_dump(array_sum([[], 3] )); // returns 3
   
   ?>

Solutions
_________

+ Filter out all values in the first argument not actually numeric: aka, they can't be cast to integer or float without error.
+ Filter out all arrays inside the first argument.

Related Error Messages
______________________

+ :ref:`array_product():-multiplication-is-not-supported-on-type-object`
