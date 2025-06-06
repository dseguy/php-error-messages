.. _cannot-use-[]-for-reading:

Cannot use [] for reading
-------------------------
 
.. meta::
	:description:
		Cannot use [] for reading: The append operator ``[]`` is a write operator: it alters the underlying variable.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use [] for reading
	:og:description: The append operator ``[]`` is a write operator: it alters the underlying variable
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%5B%5D-for-reading.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use [] for reading
	:twitter:description: Cannot use [] for reading: The append operator ``[]`` is a write operator: it alters the underlying variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-[]-for-reading.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-[]-for-reading.html","name":"Cannot use [] for reading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The append operator ``[]`` is a write operator: it alters the underlying variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-[]-for-reading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The append operator ``[]`` is a write operator: it alters the underlying variable. It cannot be used for reading, as it doesn't produce a value. Hence, it is not possible to use the append operator as an argument, or with a short assignment operator.

Example
_______

.. code-block:: php

   <?php
   
   // += needs a value to increment, which [] cannot provide
   $a[] += 2; 
   
   // When foo() is called, the value of the arguments is transmitted to the function.
   // Here, $a[] has no value.
   foo($a[]); 
   
   ?>

Solutions
_________

+ Only use [] in writing context.
