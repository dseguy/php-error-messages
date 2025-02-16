.. _syntax-error,-unexpected-'-',-expecting-'=':

syntax error, unexpected '-', expecting '='
-------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected '-', expecting '=': When defining a constant, the constant name must be valid.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;-&#039;, expecting &#039;=&#039;
	:og:description: When defining a constant, the constant name must be valid
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27-%27%2C-expecting-%27%3D%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected '-', expecting '='
	:twitter:description: syntax error, unexpected '-', expecting '=': When defining a constant, the constant name must be valid
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'-',-expecting-'='.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'-',-expecting-'='.html","name":"syntax error, unexpected '-', expecting '='","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"When defining a constant, the constant name must be valid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'-',-expecting-'='.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When defining a constant, the constant name must be valid. It must be satisfying the following regex: ``/[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/``. When an unexpected character appears, it yields this errors, mentioning the erroneous character first.

This error appears for global constant, written with ``const`` or for class constants, inside a class.

The unexpected character may have a lot of variations, in particular any non-letter or non-figure characters. Check the regex for more options.

Example
_______

.. code-block:: php

   <?php
   
   const A-B = 1;
   
   ?>

Solutions
_________

+ Remove the ``-`` in the constant name.
+ Remove the ``unexpected`` character in the constant name.
+ Remove the constant definition.
