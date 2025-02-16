.. _syntax-error,-unexpected-token-"}":

syntax error, unexpected token "}"
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "}": The closing curly bracket usually mark the end of a block of instructions.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;}&quot;
	:og:description: The closing curly bracket usually mark the end of a block of instructions
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%7D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "}"
	:twitter:description: syntax error, unexpected token "}": The closing curly bracket usually mark the end of a block of instructions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"}\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"}\".html","name":"syntax error, unexpected token \"}\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The closing curly bracket usually mark the end of a block of instructions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"}\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The closing curly bracket usually mark the end of a block of instructions.

When it is reported as an error, it means that the previous instruction was not closed as expected. For example, when a semi-colon was not forgotten on the previous line.

Example
_______

.. code-block:: php

   <?php
   
   // print needs a ; at the end of the command
   if ($c == 3) { print 'OK'.PHP_EOL }
   
   // The curly brackets are balanced, but not the parenthesis
   if (in_array(1, [2, 4]) {}
   
   ?>

Solutions
_________

+ Check if the previous line need a semi-colon ``;``.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"{"`
+ :ref:`syntax-error,-unexpected-token-"("`
+ :ref:`syntax-error,-unexpected-token-")"`
+ :ref:`syntax-error,-unexpected-token-"]"`
