.. _syntax-error,-unexpected-token-"exit":

syntax error, unexpected token "exit"
-------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "exit": This error reports a badly placed ``exit`` or ``die`` command.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;exit&quot;
	:og:description: This error reports a badly placed ``exit`` or ``die`` command
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22exit%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "exit"
	:twitter:description: syntax error, unexpected token "exit": This error reports a badly placed ``exit`` or ``die`` command
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"exit\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"exit\".html","name":"syntax error, unexpected token \"exit\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error reports a badly placed ``exit`` or ``die`` command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"exit\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports a badly placed ``exit`` or ``die`` command. Both of them are represented with the same ``exit`` token, hence the naming of the error.

Example
_______

.. code-block:: php

   <?php
   
   $a = 1
   die();
   
   ?>

Solutions
_________

+ Make sure the previous instruction is complete, with its semi-colon.
