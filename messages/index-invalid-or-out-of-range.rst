.. _index-invalid-or-out-of-range:

Index invalid or out of range
-----------------------------
 
.. meta::
	:description:
		Index invalid or out of range: This error message is returned by the ``SplFixedArray`` object, when trying to access indices outside the validity interval.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Index invalid or out of range
	:og:description: This error message is returned by the ``SplFixedArray`` object, when trying to access indices outside the validity interval
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/index-invalid-or-out-of-range.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Index invalid or out of range
	:twitter:description: Index invalid or out of range: This error message is returned by the ``SplFixedArray`` object, when trying to access indices outside the validity interval
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/index-invalid-or-out-of-range.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/index-invalid-or-out-of-range.html","name":"Index invalid or out of range","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error message is returned by the ``SplFixedArray`` object, when trying to access indices outside the validity interval","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/index-invalid-or-out-of-range.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error message is returned by the ``SplFixedArray`` object, when trying to access indices outside the validity interval. A SplFixedArray has a limited number of elements, set at the beginiing, or updated laster with ``setSize()``.

On a regular array, accessing an undefined index is a warning, not a fatal error.

A different message is emited when the index is not an integer.

Example
_______

.. code-block:: php

   <?php
   
   $object = new SplFixedArray(3);
   
   $object[1] = 3;
   echo $object[1]; // OK
   echo $object[0]; // OK, returns null
   
   echo $object[-1];
   //Fatal error: Uncaught RuntimeException: Index invalid or out of range
   
   ?>

Solutions
_________

+ Check the size of the array before accessing one of the index.
+ Check that the index is zero or more.
+ Use a regular array.
