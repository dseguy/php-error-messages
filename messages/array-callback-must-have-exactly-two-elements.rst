.. _array-callback-must-have-exactly-two-elements:

Array callback must have exactly two elements
---------------------------------------------
 
.. meta::
	:description:
		Array callback must have exactly two elements: An array callback is an array that is used as a callback function.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Array callback must have exactly two elements
	:og:description: An array callback is an array that is used as a callback function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array-callback-must-have-exactly-two-elements.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array callback must have exactly two elements
	:twitter:description: Array callback must have exactly two elements: An array callback is an array that is used as a callback function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-callback-must-have-exactly-two-elements.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-callback-must-have-exactly-two-elements.html","name":"Array callback must have exactly two elements","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 29 Jul 2025 17:36:37 +0000","dateModified":"Tue, 29 Jul 2025 17:36:37 +0000","description":"An array callback is an array that is used as a callback function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-callback-must-have-exactly-two-elements.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An array callback is an array that is used as a callback function. That structure is needed when using a method, static or not, as a callback: indeed, it requires an object or a class name, and the method name. It also does not need more elements, so two are sufficient.

Example
_______

.. code-block:: php

   <?php
   
   $a = array('a', 'b', 'c');
   $a();
   
   $e = array('d');
   $e();
   
   ?>

Solutions
_________

+ Remove any extra elements in the array, to have only two elements.
+ Add any missing elements in the array, up to two elements.

Related Error Messages
______________________

+ :ref:`array-callback-has-to-contain-indices-0-and-1`
