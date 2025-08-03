.. _syntax-error,-unexpected-token-";":

syntax error, unexpected token ";"
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";": The semi-colon marks the end of a command.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;
	:og:description: The semi-colon marks the end of a command
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";"
	:twitter:description: syntax error, unexpected token ";": The semi-colon marks the end of a command
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\".html","name":"syntax error, unexpected token \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 02 Aug 2025 08:03:21 +0000","dateModified":"Sat, 02 Aug 2025 08:03:21 +0000","description":"The semi-colon marks the end of a command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The semi-colon marks the end of a command. They are needed in blocks, or sequences of commands.

In the first case, the semi-colon signals the end of the ``exit`` command, and PHP is still parsing the if condition.

In the second case, the semi-colon is understated by the closing PHP tag. The previous attribute ``#[A]`` requires a structure (class, interface, function...), which is not found.

Example
_______

.. code-block:: php

   <?php
   
   // 'if' needs a second closing ), but PHP keeps parsing it until the semi colon.
   if ($d !== foo() {
       exit(1);
   }
   
   #[A()] 
   // This is an attribute, and it needs a structure to apply to. 
   
   ?>

Solutions
_________

+ Check previous opening and closing parenthesis, they might be unbalanced.
