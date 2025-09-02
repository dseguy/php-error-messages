.. _cannot-be-0:

cannot be 0
-----------
 
.. meta::
	:description:
		cannot be 0: The third argument of range() is the step: the amount to progress for each element, compared to the previous one.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: cannot be 0
	:og:description: The third argument of range() is the step: the amount to progress for each element, compared to the previous one
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-be-0.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: cannot be 0
	:twitter:description: cannot be 0: The third argument of range() is the step: the amount to progress for each element, compared to the previous one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-0.html","name":"cannot be 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Sep 2025 05:05:32 +0000","dateModified":"Tue, 02 Sep 2025 05:05:32 +0000","description":"The third argument of range() is the step: the amount to progress for each element, compared to the previous one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-be-0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The third argument of range() is the step: the amount to progress for each element, compared to the previous one. When that step is null, the range() function always creates the same element, with no chance to finish. This cannot be 0.

Example
_______

.. code-block:: php

   <?php
   
   $interval = range(10, 20, 0);
   
   ?>

Solutions
_________

+ Use a value strictly non-zero.
