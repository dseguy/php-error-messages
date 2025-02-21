.. _syntax-error,-unexpected-token-"=",-expecting-variable:

syntax error, unexpected token "=", expecting variable
------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "=", expecting variable: The name of the parameter was removed.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;=&quot;, expecting variable
	:og:description: The name of the parameter was removed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3D%22%2C-expecting-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "=", expecting variable
	:twitter:description: syntax error, unexpected token "=", expecting variable: The name of the parameter was removed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\",-expecting-variable.html","name":"syntax error, unexpected token \"=\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The name of the parameter was removed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The name of the parameter was removed.

Example
_______

.. code-block:: php

   <?php
   
   function foo( = 0) {}
   ?>

Solutions
_________

+ Add the argument name.
+ Remove the parameter entirely.
