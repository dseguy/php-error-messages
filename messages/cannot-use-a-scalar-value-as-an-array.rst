.. _cannot-use-a-scalar-value-as-an-array:

Cannot use a scalar value as an array
-------------------------------------
 
.. meta::
	:description:
		Cannot use a scalar value as an array: Scalar values cannot be modified with the array syntax: for example, it makes no sense to modify the third indexed element on an integer.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use a scalar value as an array
	:og:description: Scalar values cannot be modified with the array syntax: for example, it makes no sense to modify the third indexed element on an integer
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-a-scalar-value-as-an-array.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use a scalar value as an array
	:twitter:description: Cannot use a scalar value as an array: Scalar values cannot be modified with the array syntax: for example, it makes no sense to modify the third indexed element on an integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-a-scalar-value-as-an-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-a-scalar-value-as-an-array.html","name":"Cannot use a scalar value as an array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Scalar values cannot be modified with the array syntax: for example, it makes no sense to modify the third indexed element on an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-a-scalar-value-as-an-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Scalar values cannot be modified with the array syntax: for example, it makes no sense to modify the third indexed element on an integer.

The error message is a bit misleading, as strings are allowed to be manipulated that way: some scalar values are allowed. Arrays are, of course, allowed, and for objects, it depends if the class implements ArrayAccess or not. 

This error message is used with write context. There is an equivalent error message for reading.

Example
_______

.. code-block:: php

   <?php
   
   $a = 123;
   $a[3] = 2;
   
   $b = true;
   $a[3] = 4;
   
   ?>

Solutions
_________

+ Cast the value to a string.
+ Cast the value to an array.
+ Use a better suited operator than this one.
+ Test the type before using the array syntax on the value.
