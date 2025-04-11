.. _syntax-error,-unexpected-token-"implements":

syntax error, unexpected token "implements"
-------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "implements": ``implements`` is a PHP token, which appears inside a ``class`` or ``enum`` structure.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;implements&quot;
	:og:description: ``implements`` is a PHP token, which appears inside a ``class`` or ``enum`` structure
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22implements%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "implements"
	:twitter:description: syntax error, unexpected token "implements": ``implements`` is a PHP token, which appears inside a ``class`` or ``enum`` structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"implements\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"implements\".html","name":"syntax error, unexpected token \"implements\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 18:12:02 +0000","dateModified":"Mon, 24 Mar 2025 18:12:02 +0000","description":"``implements`` is a PHP token, which appears inside a ``class`` or ``enum`` structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"implements\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``implements`` is a PHP token, which appears inside a ``class`` or ``enum`` structure. It cannot be find anywhere else.

Example
_______

.. code-block:: php

   <?php
   
   X extends Y { }
   
   enum Y extends Z { }
   
   ?>

Solutions
_________

+ Check that a ``class`` or an ``enum`` have been started.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"extends"`
