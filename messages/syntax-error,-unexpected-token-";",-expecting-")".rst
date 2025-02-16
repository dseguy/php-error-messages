.. _syntax-error,-unexpected-token-";",-expecting-")":

syntax error, unexpected token ";", expecting ")"
-------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";", expecting ")": A semi-colon was found after an opening parenthesis.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;, expecting &quot;)&quot;
	:og:description: A semi-colon was found after an opening parenthesis
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";", expecting ")"
	:twitter:description: syntax error, unexpected token ";", expecting ")": A semi-colon was found after an opening parenthesis
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\")\".html","name":"syntax error, unexpected token \";\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"A semi-colon was found after an opening parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A semi-colon was found after an opening parenthesis. To keep the code balanced, PHP expects the parenthesis to be closed before finishing the instruction.

Example
_______

.. code-block:: php

   <?php
   
   array(1,2; );
   
   foo(3,4;);
   
   function foo($a = 3;) {}
   ?>

Solutions
_________

+ Remove the semi-colon.
+ Close the parenthesis before the semi-colon.
