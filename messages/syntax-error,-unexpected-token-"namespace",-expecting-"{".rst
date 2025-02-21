.. _syntax-error,-unexpected-token-"namespace",-expecting-"{":

syntax error, unexpected token "namespace", expecting "{"
---------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "namespace", expecting "{": The ``namespace`` token is one of the first to be used in a script.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;namespace&quot;, expecting &quot;{&quot;
	:og:description: The ``namespace`` token is one of the first to be used in a script
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22namespace%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "namespace", expecting "{"
	:twitter:description: syntax error, unexpected token "namespace", expecting "{": The ``namespace`` token is one of the first to be used in a script
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"namespace\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"namespace\",-expecting-\"{\".html","name":"syntax error, unexpected token \"namespace\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ``namespace`` token is one of the first to be used in a script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"namespace\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``namespace`` token is one of the first to be used in a script. There is little other command that can be used outside a namespace.

Example
_______

.. code-block:: php

   <?php
   
   namespace A
   
   namespace B;
   
   ?>

Solutions
_________

+ Check the previous namespace command, and its final semi colon.
+ Check the previous namespace command, and its associated block.
