.. _syntax-error,-unexpected-token-";",-expecting-"{":

syntax error, unexpected token ";", expecting "{"
-------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";", expecting "{": Namespace accepts two syntaxes: the first one with an ending semi-colon, or a block, which starts with an opening curly bracket.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;, expecting &quot;{&quot;
	:og:description: Namespace accepts two syntaxes: the first one with an ending semi-colon, or a block, which starts with an opening curly bracket
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";", expecting "{"
	:twitter:description: syntax error, unexpected token ";", expecting "{": Namespace accepts two syntaxes: the first one with an ending semi-colon, or a block, which starts with an opening curly bracket
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"{\".html","name":"syntax error, unexpected token \";\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Namespace accepts two syntaxes: the first one with an ending semi-colon, or a block, which starts with an opening curly bracket","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Namespace accepts two syntaxes: the first one with an ending semi-colon, or a block, which starts with an opening curly bracket.

In the current case, there is another feature at play: the name of the namespace may be empty, to refer to the global namespace. In that case, either the ``namespace`` keyword is omitted, or a block is defined after the namespace.

Example
_______

.. code-block:: php

   <?php
   
   namespace ;
   ?>

Solutions
_________

+ Remove the ``namespace ;`` entirely.
+ Add a block after the ``namespace``, and remove the semi-colon.
