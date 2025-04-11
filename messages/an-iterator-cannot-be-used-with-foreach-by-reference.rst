.. _an-iterator-cannot-be-used-with-foreach-by-reference:

An iterator cannot be used with foreach by reference
----------------------------------------------------
 
.. meta::
	:description:
		An iterator cannot be used with foreach by reference: It is posssible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: An iterator cannot be used with foreach by reference
	:og:description: It is posssible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/an-iterator-cannot-be-used-with-foreach-by-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: An iterator cannot be used with foreach by reference
	:twitter:description: An iterator cannot be used with foreach by reference: It is posssible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/an-iterator-cannot-be-used-with-foreach-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/an-iterator-cannot-be-used-with-foreach-by-reference.html","name":"An iterator cannot be used with foreach by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is posssible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/an-iterator-cannot-be-used-with-foreach-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is posssible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified. 

Such feature is possible with an array as a source, but it is not possible with an iterator as a source. The iterator allows reading, but has no support for writing the individual elements it emits.

Example
_______

.. code-block:: php

   <?php
   
       $heap = new SplMinHeap;
       foreach( $heap as &$item ) {}
   
   ?>

Solutions
_________

+ Turn the iterator into an array and use it.
+ Keep the blind variable per-value, and call a setter in it to update it.
+ Use objects in the iterator, it is possible to update the blind variable without the reference.
