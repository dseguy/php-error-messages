.. _syntax-error,-unexpected-token-"final",-expecting-"(":

syntax error, unexpected token "final", expecting "("
-----------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "final", expecting "(": ``final`` is not a valid name for a function.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;final&quot;, expecting &quot;(&quot;
	:og:description: ``final`` is not a valid name for a function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22final%22%2C-expecting-%22%28%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "final", expecting "("
	:twitter:description: syntax error, unexpected token "final", expecting "(": ``final`` is not a valid name for a function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"final\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"final\",-expecting-\"(\".html","name":"syntax error, unexpected token \"final\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 02 Aug 2025 08:03:55 +0000","dateModified":"Sat, 02 Aug 2025 08:03:55 +0000","description":"``final`` is not a valid name for a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"final\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``final`` is not a valid name for a function. It is a valid name for a method, though.

Example
_______

.. code-block:: php

   <?php
   
   function final() {};
   
   ?>

Solutions
_________

+ Use another name for that function.
+ Remove the name, and create a closure instead.
