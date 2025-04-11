.. _only-arrays-and-traversables-can-be-unpacked:

Only arrays and Traversables can be unpacked
--------------------------------------------
 
.. meta::
	:description:
		Only arrays and Traversables can be unpacked: The triple dot ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Only arrays and Traversables can be unpacked
	:og:description: The triple dot ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-arrays-and-traversables-can-be-unpacked.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only arrays and Traversables can be unpacked
	:twitter:description: Only arrays and Traversables can be unpacked: The triple dot ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-arrays-and-traversables-can-be-unpacked.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-arrays-and-traversables-can-be-unpacked.html","name":"Only arrays and Traversables can be unpacked","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Apr 2025 16:32:47 +0000","dateModified":"Fri, 11 Apr 2025 16:32:47 +0000","description":"The triple dot ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/only-arrays-and-traversables-can-be-unpacked.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The triple dot ``...`` operator works on arrays and traversables, such as ``generator``, ``iterators``... It cannot work on other data structures.

Also, ``...`` has a lower priority than the null-coalesce operator ``??``, so it applies to both branch of the operator.

Example
_______

.. code-block:: php

   <?php
   
   $a = null;
   foo(...$a);
   
   foo(...$a ?? range(1,2));
   // displays 1, 2
   
   function foo() {
       print_r(func_get_args());
   }
   
   ?>

Solutions
_________

+ Check that the value is an array or a traverable before using the ``...`` operator.
+ Use the ``??`` operator to give a value to ``null`` before the ``...`` operator.
+ Use the ``?:`` operator to give a value to empty data before the ``...`` operator.

Related Error Messages
______________________

+ :ref:`only-arrays-can-be-unpacked-in-constant-expression`
