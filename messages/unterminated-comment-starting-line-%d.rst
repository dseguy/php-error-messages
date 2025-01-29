.. _unterminated-comment-starting-line-%d:

Unterminated comment starting line %d
-------------------------------------
 
.. meta::
	:description:
		Unterminated comment starting line %d: The multi-line comments with ``/* .
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unterminated comment starting line %d
	:og:description: The multi-line comments with ``/* 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unterminated-comment-starting-line-%25d.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unterminated comment starting line %d
	:twitter:description: Unterminated comment starting line %d: The multi-line comments with ``/* 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unterminated-comment-starting-line-%d.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unterminated-comment-starting-line-%d.html","name":"Unterminated comment starting line %d","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 29 Jan 2025 10:22:35 +0000","dateModified":"Wed, 29 Jan 2025 10:22:35 +0000","description":"The multi-line comments with ``\/* ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unterminated-comment-starting-line-%d.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The multi-line comments with ``/* ... */`` and ``/** ... */`` require a closing tag. When that closing tag is missing, the error is emitted.

This problem does not occur with the single line comment ``//``, as this comment only ends with the end of the line.

Example
_______

.. code-block:: php

   <?php
   
   /*
   comment
   
       Missing final / below
   *        
   
   ?>


Literal Examples
****************
+ Unterminated comment starting line 3

Solutions
_________

+ Check if the closing tag is complete, with ``*`` and ``/``.
+ Check if the closing tag is not missing entirely.
