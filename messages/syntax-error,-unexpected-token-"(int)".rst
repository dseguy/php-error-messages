.. _syntax-error,-unexpected-token-"(int)":

syntax error, unexpected token "(int)"
--------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "(int)": This is a bug in the parser engine of PHP: ``(int)``, ``(array)`` or the other cast operators, are recognized early in the code parsing, and are also confused inside a function call.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;(int)&quot;
	:og:description: This is a bug in the parser engine of PHP: ``(int)``, ``(array)`` or the other cast operators, are recognized early in the code parsing, and are also confused inside a function call
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%28int%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "(int)"
	:twitter:description: syntax error, unexpected token "(int)": This is a bug in the parser engine of PHP: ``(int)``, ``(array)`` or the other cast operators, are recognized early in the code parsing, and are also confused inside a function call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(int)\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(int)\".html","name":"syntax error, unexpected token \"(int)\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 14 Apr 2025 20:36:04 +0000","dateModified":"Mon, 14 Apr 2025 20:36:04 +0000","description":"This is a bug in the parser engine of PHP: ``(int)``, ``(array)`` or the other cast operators, are recognized early in the code parsing, and are also confused inside a function call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(int)\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This is a bug in the parser engine of PHP: ``(int)``, ``(array)`` or the other cast operators, are recognized early in the code parsing, and are also confused inside a function call.

Example
_______

.. code-block:: php

   <?php
   
   var_dump(int);
   
   ?>

Solutions
_________

+ Do not use any global constant, with the name of a cast operator: ``int``, ``float``, ``unset``, etc.
