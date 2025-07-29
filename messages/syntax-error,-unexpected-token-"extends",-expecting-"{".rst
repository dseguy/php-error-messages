.. _syntax-error,-unexpected-token-"extends",-expecting-"{":

syntax error, unexpected token "extends", expecting "{"
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "extends", expecting "{": When declaring a class, the ``extends`` keyword must appear before the ``implements`` one.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;extends&quot;, expecting &quot;{&quot;
	:og:description: When declaring a class, the ``extends`` keyword must appear before the ``implements`` one
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22extends%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "extends", expecting "{"
	:twitter:description: syntax error, unexpected token "extends", expecting "{": When declaring a class, the ``extends`` keyword must appear before the ``implements`` one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"extends\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"extends\",-expecting-\"{\".html","name":"syntax error, unexpected token \"extends\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 29 Jul 2025 17:51:27 +0000","dateModified":"Tue, 29 Jul 2025 17:51:27 +0000","description":"When declaring a class, the ``extends`` keyword must appear before the ``implements`` one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"extends\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When declaring a class, the ``extends`` keyword must appear before the ``implements`` one. There is only one (or no) class extension, so the ``extends`` list is often shorter than the implements list.

Example
_______

.. code-block:: php

   <?php
   
   class X implements I1, I2 extends W {}
   
   ?>

Solutions
_________

+ Move the ``extends`` keyword, and its class, right after the name of the class, and before the ``implements`` keyword.
+ Remove the ``extends`` keyword.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"extends"`
