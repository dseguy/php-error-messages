.. _argument-#1-(\$value)-must-contain-at-least-one-element:

Argument #1 ($value) must contain at least one element
------------------------------------------------------
 
.. meta::
	:description:
		Argument #1 ($value) must contain at least one element: max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Argument #1 ($value) must contain at least one element
	:og:description: max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/argument-%231-%28%24value%29-must-contain-at-least-one-element.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Argument #1 ($value) must contain at least one element
	:twitter:description: Argument #1 ($value) must contain at least one element: max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#1-($value)-must-contain-at-least-one-element.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#1-($value)-must-contain-at-least-one-element.html","name":"Argument #1 ($value) must contain at least one element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/argument-#1-($value)-must-contain-at-least-one-element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL.

Example
_______

.. code-block:: php

   <?php
   
   max([]);
   
   ?>

Solutions
_________

+ Check if the array has at least one argument before calling max() or min().
+ Add an element to the array before callign max(), and use it as a canary.
