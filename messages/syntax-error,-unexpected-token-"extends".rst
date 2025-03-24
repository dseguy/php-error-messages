.. _syntax-error,-unexpected-token-"extends":

syntax error, unexpected token "extends"
----------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "extends": ``extends`` is a PHP token, which appears inside a ``class`` or ``interface`` structure.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;extends&quot;
	:og:description: ``extends`` is a PHP token, which appears inside a ``class`` or ``interface`` structure
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22extends%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "extends"
	:twitter:description: syntax error, unexpected token "extends": ``extends`` is a PHP token, which appears inside a ``class`` or ``interface`` structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"extends\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"extends\".html","name":"syntax error, unexpected token \"extends\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 18:05:07 +0000","dateModified":"Mon, 24 Mar 2025 18:05:07 +0000","description":"``extends`` is a PHP token, which appears inside a ``class`` or ``interface`` structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"extends\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``extends`` is a PHP token, which appears inside a ``class`` or ``interface`` structure. It cannot be find anywhere else.

Example
_______

.. code-block:: php

   <?php
   
   X extends Y { }
   
   enum Y extends Z { }
   
   ?>

Solutions
_________

+ Check that a ``class`` or an ``interface`` have been started.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"extends",-expecting-"{"`
+ :ref:`syntax-error,-unexpected-token-"implements"`
