.. _cannot-use-empty-array-elements-in-arrays:

Cannot use empty array elements in arrays
-----------------------------------------
 
.. meta::
	:description:
		Cannot use empty array elements in arrays: Arrays can only hold values.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use empty array elements in arrays
	:og:description: Arrays can only hold values
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-empty-array-elements-in-arrays.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use empty array elements in arrays
	:twitter:description: Cannot use empty array elements in arrays: Arrays can only hold values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-empty-array-elements-in-arrays.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-empty-array-elements-in-arrays.html","name":"Cannot use empty array elements in arrays","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Apr 2025 19:30:28 +0000","dateModified":"Wed, 02 Apr 2025 19:08:58 +0000","description":"Arrays can only hold values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-empty-array-elements-in-arrays.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Arrays can only hold values. There is not meaning in an empty slots in an array. 

This problem happens at writing time, and cannot happen at execution time. 

This problem looks very similar to the usage of list() with empty slots: yet, list() is allowed to skip all but at least one element. With the modern short syntax of arrays and list, it might be tricky to distinguish them.

Example
_______

.. code-block:: php

   <?php
   
   $a = [,,,];
   $a = array(,,,);
   
   [,,$x] = [1,2,3];
   list(,,$x) = [1,2,3];
   
   ?>

Solutions
_________

+ Spot consecutive commas in an array() syntax.
