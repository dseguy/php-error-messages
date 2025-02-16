.. _syntax-error,-unexpected-token-":",-expecting-"]":

syntax error, unexpected token ":", expecting "]"
-------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ":", expecting "]": Colons are used with the ternary operators, labels and named parameters.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;:&quot;, expecting &quot;]&quot;
	:og:description: Colons are used with the ternary operators, labels and named parameters
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3A%22%2C-expecting-%22%5D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ":", expecting "]"
	:twitter:description: syntax error, unexpected token ":", expecting "]": Colons are used with the ternary operators, labels and named parameters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\":\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\":\",-expecting-\"]\".html","name":"syntax error, unexpected token \":\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Colons are used with the ternary operators, labels and named parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\":\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Colons are used with the ternary operators, labels and named parameters. They may also be involved in a typo with a double colon, that lost one half of its elements.

Example
_______

.. code-block:: php

   <?php
   
   #[A\Bc: 'D')]
   
   ?>

Solutions
_________

+ Add the missing parenthesis between the ``B`` attribute name and the ``c`` named parameter.
