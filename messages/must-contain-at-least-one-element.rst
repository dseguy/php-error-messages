.. _must-contain-at-least-one-element:

must contain at least one element
---------------------------------
 
.. meta::
	:description:
		must contain at least one element: min() and max() only work on arrays that contains at least one element.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must contain at least one element
	:og:description: min() and max() only work on arrays that contains at least one element
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-contain-at-least-one-element.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must contain at least one element
	:twitter:description: must contain at least one element: min() and max() only work on arrays that contains at least one element
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-contain-at-least-one-element.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-contain-at-least-one-element.html","name":"must contain at least one element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"min() and max() only work on arrays that contains at least one element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-contain-at-least-one-element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
min() and max() only work on arrays that contains at least one element. The object here is to avoid the confusion of the ``null`` value that may be the result of the operation, and the ``null`` that PHP used to return when there was nothing to process in the array.

Example
_______

.. code-block:: php

   <?php
   
   echo min([]);
   echo max([]);
   
   ?>

Solutions
_________

+ Check for empty() before using the min() or max() functions.
