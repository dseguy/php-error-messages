.. _syntax-error,-unexpected-identifier-"%s",-expecting-")":

syntax error, unexpected identifier "%s", expecting ")"
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting ")": This error appears an argument is already a complete expression, yet a new identifier appears after it.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting &quot;)&quot;
	:og:description: This error appears an argument is already a complete expression, yet a new identifier appears after it
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s", expecting ")"
	:twitter:description: syntax error, unexpected identifier "%s", expecting ")": This error appears an argument is already a complete expression, yet a new identifier appears after it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\")\".html","name":"syntax error, unexpected identifier \"%s\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Apr 2025 07:47:47 +0000","dateModified":"Mon, 21 Apr 2025 07:47:47 +0000","description":"This error appears an argument is already a complete expression, yet a new identifier appears after it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears an argument is already a complete expression, yet a new identifier appears after it. Within a method call, this could have been the end of the call itself, or an expression error.

Example
_______

.. code-block:: php

   <?php
   
   foo(a: 1 b: 2);
   
   foo(a: 1 c);
   
   ?>


Literal Examples
****************
+ syntax error, unexpected identifier "b", expecting ")"

Solutions
_________

+ Add the missing comma between the arguments.
+ Add the missing operator to build a full expression. There may be many ways to make the expression valid.
+ Close the function call with a closing parenthese, and start a new expression after it.
