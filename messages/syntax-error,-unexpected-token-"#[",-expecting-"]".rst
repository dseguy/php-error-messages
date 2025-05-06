.. _syntax-error,-unexpected-token-"#[",-expecting-"]":

syntax error, unexpected token "#[", expecting "]"
--------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "#[", expecting "]": It is not possible to nest attributes, so the first attribute must be finished, with a closing square bracket, before opening the second one.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;#[&quot;, expecting &quot;]&quot;
	:og:description: It is not possible to nest attributes, so the first attribute must be finished, with a closing square bracket, before opening the second one
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%23%5B%22%2C-expecting-%22%5D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "#[", expecting "]"
	:twitter:description: syntax error, unexpected token "#[", expecting "]": It is not possible to nest attributes, so the first attribute must be finished, with a closing square bracket, before opening the second one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"#[\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"#[\",-expecting-\"]\".html","name":"syntax error, unexpected token \"#[\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 27 Apr 2025 20:13:17 +0000","dateModified":"Sun, 27 Apr 2025 20:13:17 +0000","description":"It is not possible to nest attributes, so the first attribute must be finished, with a closing square bracket, before opening the second one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"#[\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to nest attributes, so the first attribute must be finished, with a closing square bracket, before opening the second one.

Example
_______

.. code-block:: php

   <?php
   
   #[A
   #[B]
   class X {}
   
   ?>

Solutions
_________

+ Close the first attribute with a closing square bracket.
+ Remove the extra opening ``#[`` attribute, and use a comma.
