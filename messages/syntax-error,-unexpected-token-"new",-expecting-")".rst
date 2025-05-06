.. _syntax-error,-unexpected-token-"new",-expecting-")":

syntax error, unexpected token "new", expecting ")"
---------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "new", expecting ")": This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;new&quot;, expecting &quot;)&quot;
	:og:description: This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22new%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "new", expecting ")"
	:twitter:description: syntax error, unexpected token "new", expecting ")": This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"new\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"new\",-expecting-\")\".html","name":"syntax error, unexpected token \"new\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 22 Apr 2025 17:26:26 +0000","dateModified":"Tue, 22 Apr 2025 17:26:26 +0000","description":"This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"new\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator. The suggestion to use a closing parenthese is valid, though not the only one.

Example
_______

.. code-block:: php

   <?php
   
   foo(arg new B());
   
   class B {}
   
   function foo(B $arg) {}
   
   ?>

Solutions
_________

+ Add the missing ``:`` before the new operator.
+ Add the missing ``)`` before the new operator, and add a semi-colon or a comman, depending on the context.
