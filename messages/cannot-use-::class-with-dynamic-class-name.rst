.. _cannot-use-::class-with-dynamic-class-name:

Cannot use ::class with dynamic class name
------------------------------------------
 
.. meta::
	:description:
		Cannot use ::class with dynamic class name: Until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use ::class with dynamic class name
	:og:description: Until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%3A%3Aclass-with-dynamic-class-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use ::class with dynamic class name
	:twitter:description: Cannot use ::class with dynamic class name: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-::class-with-dynamic-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-::class-with-dynamic-class-name.html","name":"Cannot use ::class with dynamic class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-::class-with-dynamic-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 8.0, it was not possible to use a variable (or any data container) with the ::class operator to get its name. Basically, the name of the class had to be hardcoded.

Example
_______

.. code-block:: php

   <?php
   
   $a::class;
   
   ?>

Solutions
_________

+ Use get_class().
+ Use instanceof.
