.. _current-function-is-not-a-closure:

Current function is not a closure
---------------------------------
 
.. meta::
	:description:
		Current function is not a closure: The ``Closure::getCurrent()`` method may only be called inside a closure or an arrow function.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Current function is not a closure
	:og:description: The ``Closure::getCurrent()`` method may only be called inside a closure or an arrow function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/current-function-is-not-a-closure.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Current function is not a closure
	:twitter:description: Current function is not a closure: The ``Closure::getCurrent()`` method may only be called inside a closure or an arrow function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/current-function-is-not-a-closure.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/current-function-is-not-a-closure.html","name":"Current function is not a closure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Oct 2025 09:08:11 +0000","dateModified":"Sat, 25 Oct 2025 09:08:11 +0000","description":"The ``Closure::getCurrent()`` method may only be called inside a closure or an arrow function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/current-function-is-not-a-closure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``Closure::getCurrent()`` method may only be called inside a closure or an arrow function. 

This error message also applies to methods.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
       echo Closure::getCurrent();
   }
   
   foo();
   
   ?>

Solutions
_________

+ Remove the call to ``Closure::getCurrent()`` from the function.
+ Turn the funciton into a closure or an arrow function.
