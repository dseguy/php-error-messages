.. _syntax-error,-unexpected-token-"?->":

syntax error, unexpected token "?->"
------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "?->": This error reports that the object syntax was not expected there.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;?-&gt;&quot;
	:og:description: This error reports that the object syntax was not expected there
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3F-%3E%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "?->"
	:twitter:description: syntax error, unexpected token "?->": This error reports that the object syntax was not expected there
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"?->\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"?->\".html","name":"syntax error, unexpected token \"?->\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jan 2025 16:15:35 +0000","dateModified":"Thu, 16 Jan 2025 16:15:35 +0000","description":"This error reports that the object syntax was not expected there","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"?->\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports that the object syntax was not expected there. 

One classic reason is the new syntax in PHP 8.4, where parenthesis are not necessary, right after a new, to call properties or methods. This syntax actually requires the parenthesis.

Example
_______

.. code-block:: php

   <?php
   
   // should be new X()?->method();
   new X?->method();
   
   ?>

Solutions
_________

+ Add the parenthesis on the ``new`` call.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"->"`
