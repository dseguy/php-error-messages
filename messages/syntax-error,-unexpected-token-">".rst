.. _syntax-error,-unexpected-token-">":

syntax error, unexpected token ">"
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ">": This syntax error is characteristic of the pipe operator ``|&gt;`` being used in version older than PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;&gt;&quot;
	:og:description: This syntax error is characteristic of the pipe operator ``|&gt;`` being used in version older than PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3E%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ">"
	:twitter:description: syntax error, unexpected token ">": This syntax error is characteristic of the pipe operator ``|>`` being used in version older than PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\">\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\">\".html","name":"syntax error, unexpected token \">\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Nov 2025 20:46:46 +0000","dateModified":"Tue, 04 Nov 2025 20:46:46 +0000","description":"This syntax error is characteristic of the pipe operator ``|>`` being used in version older than PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\">\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This syntax error is characteristic of the pipe operator ``|>`` being used in version older than PHP 8.5.

Example
_______

.. code-block:: php

   <?php
   
   'abc' |> strtoupper(...);
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.5.
+ Nest the calls, instead of using the pipe operator.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/PipeOperator <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/PipeOperator.html>`_.
