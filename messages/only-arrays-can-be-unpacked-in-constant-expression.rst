.. _only-arrays-can-be-unpacked-in-constant-expression:

Only arrays can be unpacked in constant expression
--------------------------------------------------
 
.. meta::
	:description:
		Only arrays can be unpacked in constant expression: ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Only arrays can be unpacked in constant expression
	:og:description: ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-arrays-can-be-unpacked-in-constant-expression.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only arrays can be unpacked in constant expression
	:twitter:description: Only arrays can be unpacked in constant expression: ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-arrays-can-be-unpacked-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-arrays-can-be-unpacked-in-constant-expression.html","name":"Only arrays can be unpacked in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Apr 2025 16:32:56 +0000","dateModified":"Fri, 11 Apr 2025 16:32:56 +0000","description":"``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/only-arrays-can-be-unpacked-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``...`` may be used on both arrays and ``Traversable`` objects, but within a static constant expression, this operator only works on arrays, and cannot be used on objects, ``Traversable``  or not.

Example
_______

.. code-block:: php

   <?php
   
   const A = 2;
   
   function foo($a = [...A]) {
       print_r($a);
   }
   
   foo();
   
   ?>

Solutions
_________

+ Rewrite the expression without the ``...`` operator.
+ Convert the object into an array.

Related Error Messages
______________________

+ :ref:`only-arrays-and-traversables-can-be-unpacked`
