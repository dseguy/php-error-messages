.. _uninitialized-string-offset:

Uninitialized string offset
---------------------------
 
.. meta::
	:description:
		Uninitialized string offset: This error appears when using the array syntax on strings, while the requested index is too large, or too small.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Uninitialized string offset
	:og:description: This error appears when using the array syntax on strings, while the requested index is too large, or too small
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/uninitialized-string-offset.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Uninitialized string offset
	:twitter:description: Uninitialized string offset: This error appears when using the array syntax on strings, while the requested index is too large, or too small
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/uninitialized-string-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/uninitialized-string-offset.html","name":"Uninitialized string offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Oct 2024 20:49:57 +0000","dateModified":"Wed, 02 Oct 2024 12:34:19 +0000","description":"This error appears when using the array syntax on strings, while the requested index is too large, or too small","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/uninitialized-string-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when using the array syntax on strings, while the requested index is too large, or too small.

An offset is too big when it is beyond the length of the string. An offset is too small with it is below the length of the string, multiplied by -1. All values between ``- strlen($string)`` and ``strlen($string)`` are valid.

This error is displayed when the string offset is read. It becomes a ``Illegal string offset`` when the syntax is used to write a character.


Example
_______

.. code-block:: php

   <?php
   
   $string = 'abc';
   
   //Uninitialized string offset
   echo $string[-10];
   
   //Uninitialized string offset that is too big
   echo $string[5];
   
   ?>

Solutions
_________

+ Check for the size of the string before using the offset.
+ Use substr(), which returns empty string for out of range offsets.

Related Error Messages
______________________

+ :ref:`illegal-string-offset`
