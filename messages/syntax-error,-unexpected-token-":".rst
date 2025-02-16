.. _syntax-error,-unexpected-token-":":

syntax error, unexpected token ":"
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ":": A syntax error is a generic error, where PHP could not compile the code.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;:&quot;
	:og:description: A syntax error is a generic error, where PHP could not compile the code
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3A%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ":"
	:twitter:description: syntax error, unexpected token ":": A syntax error is a generic error, where PHP could not compile the code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\":\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\":\".html","name":"syntax error, unexpected token \":\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"A syntax error is a generic error, where PHP could not compile the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\":\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A syntax error is a generic error, where PHP could not compile the code. Here are some classic typo or seemingly valid code that leads to this error.

+ Since PHP 8.0, named parameters may be used, though parameters don't use the initial ``$`` sign.

Example
_______

.. code-block:: php

   <?php
   
   // calling a named parameter, with the $ in the parameter name
   foo($c: 1);
   
   ?>

Solutions
_________

+ Fix the name of the parameter.
