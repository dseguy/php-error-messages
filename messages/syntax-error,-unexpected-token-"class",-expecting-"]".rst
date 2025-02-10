.. _syntax-error,-unexpected-token-"class",-expecting-"]":

syntax error, unexpected token "class", expecting-"]"
-----------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "class", expecting-"]": The previous attribute was not closed with a square bracket, and its syntax is spilling over the supporting class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;class&quot;, expecting-&quot;]&quot;
	:og:description: The previous attribute was not closed with a square bracket, and its syntax is spilling over the supporting class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22class%22%2C-expecting-%22%5D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "class", expecting-"]"
	:twitter:description: syntax error, unexpected token "class", expecting-"]": The previous attribute was not closed with a square bracket, and its syntax is spilling over the supporting class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"class\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"class\",-expecting-\"]\".html","name":"syntax error, unexpected token \"class\", expecting-\"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Feb 2025 09:45:50 +0000","dateModified":"Mon, 10 Feb 2025 09:45:50 +0000","description":"The previous attribute was not closed with a square bracket, and its syntax is spilling over the supporting class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"class\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The previous attribute was not closed with a square bracket, and its syntax is spilling over the supporting class.

Example
_______

.. code-block:: php

   <?php
   
   #[Attribute()
   class X {}
   
   ?>

Solutions
_________

+ Remove the attribute.
+ Close the attribute with a square bracket.
