.. _syntax-error,-unexpected-token-"namespace":

syntax error, unexpected token "namespace"
------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "namespace": The ``namespace`` token is one of the first to be used in a script.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;namespace&quot;
	:og:description: The ``namespace`` token is one of the first to be used in a script
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22namespace%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "namespace"
	:twitter:description: syntax error, unexpected token "namespace": The ``namespace`` token is one of the first to be used in a script
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"namespace\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"namespace\".html","name":"syntax error, unexpected token \"namespace\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The ``namespace`` token is one of the first to be used in a script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"namespace\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``namespace`` token is one of the first to be used in a script. There is little other command that can be used outside a namespace.

Example
_______

.. code-block:: php

   <?php
   
   declare(strict_types=1)
   
   namespace A;
   
   ?>

Solutions
_________

+ Check the previous declare command, and its final semi colon.
