.. _syntax-error,-unexpected-token-"=":

syntax error, unexpected token "="
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "=": The ``=`` assignation operator is found after a constant name.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;=&quot;
	:og:description: The ``=`` assignation operator is found after a constant name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "="
	:twitter:description: syntax error, unexpected token "=": The ``=`` assignation operator is found after a constant name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\".html","name":"syntax error, unexpected token \"=\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The ``=`` assignation operator is found after a constant name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``=`` assignation operator is found after a constant name. Constants are defined with ``const`` keyword, and later, they are not changed.

Example
_______

.. code-block:: php

   <?php
   
   a = 1;
   
   ?>

Solutions
_________

+ Turn the constant name into a variable name by adding a ``$`` sign before it.
+ Make this code a constant definition by adding ``const`` before it, if it was not already defined.
