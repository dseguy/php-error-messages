.. _passing-the-encoding-as-third-parameter-is-deprecated.-use-an-explicit-zero-offset:

Passing the encoding as third parameter is deprecated. Use an explicit zero offset
----------------------------------------------------------------------------------
 
.. meta::
	:description:
		Passing the encoding as third parameter is deprecated. Use an explicit zero offset: PHP used to recognize automatically the third parameter when it was actually the encoding, and noth the offset of start.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Passing the encoding as third parameter is deprecated. Use an explicit zero offset
	:og:description: PHP used to recognize automatically the third parameter when it was actually the encoding, and noth the offset of start
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/passing-the-encoding-as-third-parameter-is-deprecated.-use-an-explicit-zero-offset.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Passing the encoding as third parameter is deprecated. Use an explicit zero offset
	:twitter:description: Passing the encoding as third parameter is deprecated. Use an explicit zero offset: PHP used to recognize automatically the third parameter when it was actually the encoding, and noth the offset of start
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-the-encoding-as-third-parameter-is-deprecated.-use-an-explicit-zero-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-the-encoding-as-third-parameter-is-deprecated.-use-an-explicit-zero-offset.html","name":"Passing the encoding as third parameter is deprecated. Use an explicit zero offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Jan 2025 10:45:24 +0000","dateModified":"Tue, 28 Jan 2025 10:45:24 +0000","description":"PHP used to recognize automatically the third parameter when it was actually the encoding, and noth the offset of start","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/passing-the-encoding-as-third-parameter-is-deprecated.-use-an-explicit-zero-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP used to recognize automatically the third parameter when it was actually the encoding, and noth the offset of start. The latter is an integer, while the former is a string. 

In PHP 8.0, it is now a normal type  error.

Example
_______

.. code-block:: php

   <?php
   
   // Valid in PHP 7.x
   echo mb_strrpos('abc', 'a', 'utf8');
   
   // Valid in PHP 8.+
   echo mb_strrpos('abc', 'a', 0, 'utf8');
   echo mb_strrpos('abc', 'a', encoding: 'utf8');
   
   ?>

Solutions
_________

+ Use named parameters.
+ Add a 0 as third parameter (the default value for offset).


In previous PHP versions, this error message used to be :ref:`argument-#%d-($%s)-must-be-of-type-%s,-%s-given`.
