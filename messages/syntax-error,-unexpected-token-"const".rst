.. _syntax-error,-unexpected-token-"const":

syntax error, unexpected token "const"
--------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "const": Attributes on global constants are supported since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;const&quot;
	:og:description: Attributes on global constants are supported since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22const%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "const"
	:twitter:description: syntax error, unexpected token "const": Attributes on global constants are supported since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"const\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"const\".html","name":"syntax error, unexpected token \"const\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Nov 2025 05:46:10 +0000","dateModified":"Tue, 18 Nov 2025 05:46:10 +0000","description":"Attributes on global constants are supported since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"const\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Attributes on global constants are supported since PHP 8.5. Before that version, they are not recognized, and yield this syntax error.

Example
_______

.. code-block:: php

   <?php
   
   #[ConstAttribute]
   const A = 1;
   
   ?>

Solutions
_________

+ Remove the attribute.
+ Refactor the global constant to a class constant.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
