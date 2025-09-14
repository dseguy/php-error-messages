.. _cannot-add-element-to-the-array-as-the-next-element-is-already-occupied:

Cannot add element to the array as the next element is already occupied
-----------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot add element to the array as the next element is already occupied: This error appears when the largest PHP integer has been used as an index in an array.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot add element to the array as the next element is already occupied
	:og:description: This error appears when the largest PHP integer has been used as an index in an array
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-add-element-to-the-array-as-the-next-element-is-already-occupied.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot add element to the array as the next element is already occupied
	:twitter:description: Cannot add element to the array as the next element is already occupied: This error appears when the largest PHP integer has been used as an index in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-add-element-to-the-array-as-the-next-element-is-already-occupied.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-add-element-to-the-array-as-the-next-element-is-already-occupied.html","name":"Cannot add element to the array as the next element is already occupied","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 13 Sep 2025 09:50:33 +0000","dateModified":"Sat, 13 Sep 2025 09:50:33 +0000","description":"This error appears when the largest PHP integer has been used as an index in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-add-element-to-the-array-as-the-next-element-is-already-occupied.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when the largest PHP integer has been used as an index in an array. When appending a new item in the array, PHP calculates the largest index, and adds one. Though, in this situation, it is not possible anymore to create a new integer, since the last one was used.

This error appears when a value was stored ``out of the way``, yet the array is appended later.

Example
_______

.. code-block:: php

   <?php
   
   $array = [0 => 'a', PHP_INT_MAX => 'b'];
   $array[] = 3;
   
   ?>

Solutions
_________

+ Avoid using PHP_INT_MAX as index in the array.
+ Assign the value with an explicit index, rather than an append.
