.. _syntax-error,-unexpected-token-"<<":

syntax error, unexpected token "<<"
-----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "<<": This error might be related to the left bitshift operator, although it is often related to a git diff leftover.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;&lt;&lt;&quot;
	:og:description: This error might be related to the left bitshift operator, although it is often related to a git diff leftover
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3C%3C%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "<<"
	:twitter:description: syntax error, unexpected token "<<": This error might be related to the left bitshift operator, although it is often related to a git diff leftover
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"<<\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"<<\".html","name":"syntax error, unexpected token \"<<\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jan 2025 15:39:28 +0000","dateModified":"Thu, 09 Jan 2025 15:39:28 +0000","description":"This error might be related to the left bitshift operator, although it is often related to a git diff leftover","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"<<\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error might be related to the left bitshift operator, although it is often related to a git diff leftover. Here, a merge conflict was left in the code, and the first and erroneous characters are ``<<``.

There are other possibilities of error with that operator, although they are less common.


Example
_______

.. code-block:: php

   <?php
   
   <<<<<<< HEAD
       $a = 2 * $b;
   =======
       $a = 3 * $b + 1;
   >>>>>>> e0ce25cd1fe156c2f50def834532e489b923dcef
   
   ?>

Solutions
_________

+ Remove the diff from the code, as it doesn't compile.
+ Fix the merge conflict.
