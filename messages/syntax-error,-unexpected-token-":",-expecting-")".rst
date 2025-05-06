.. _syntax-error,-unexpected-token-":",-expecting-")":

syntax error, unexpected token ":", expecting ")"
-------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ":", expecting ")": Single colons ``:`` are allowed in a method call, as they separate the value and the name of the named parameter.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;:&quot;, expecting &quot;)&quot;
	:og:description: Single colons ``:`` are allowed in a method call, as they separate the value and the name of the named parameter
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3A%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ":", expecting ")"
	:twitter:description: syntax error, unexpected token ":", expecting ")": Single colons ``:`` are allowed in a method call, as they separate the value and the name of the named parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\":\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\":\",-expecting-\")\".html","name":"syntax error, unexpected token \":\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Apr 2025 08:35:46 +0000","dateModified":"Mon, 21 Apr 2025 08:35:46 +0000","description":"Single colons ``:`` are allowed in a method call, as they separate the value and the name of the named parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\":\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Single colons ``:`` are allowed in a method call, as they separate the value and the name of the named parameter. Here, the name of the parameter is missing.

Example
_______

.. code-block:: php

   <?php
   
   foo(a:1, : 2);
   
   ?>

Solutions
_________

+ Add the name of the parameter before the colon.
+ Remove the colon.
