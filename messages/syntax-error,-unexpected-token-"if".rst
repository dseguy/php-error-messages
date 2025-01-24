.. _syntax-error,-unexpected-token-"if":

syntax error, unexpected token "if"
-----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "if": If-then expressions are standalone expressions, and cannot be used inside another expression.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;if&quot;
	:og:description: If-then expressions are standalone expressions, and cannot be used inside another expression
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22if%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "if"
	:twitter:description: syntax error, unexpected token "if": If-then expressions are standalone expressions, and cannot be used inside another expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"if\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"if\".html","name":"syntax error, unexpected token \"if\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Dec 2024 10:51:40 +0000","dateModified":"Tue, 31 Dec 2024 10:51:40 +0000","description":"If-then expressions are standalone expressions, and cannot be used inside another expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"if\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
If-then expressions are standalone expressions, and cannot be used inside another expression. Hence, they must be preceded by a semi-colon, or any other expression closing character.

Example
_______

.. code-block:: php

   <?php
   
   $a = foo() && if ($a == 2) { echo $a; } else { echo "No A"; }
   
   match( 
   if ($a == 2) { echo $a; } else { echo "No A"; }
   
   ?>

Solutions
_________

+ Replace the ``&&`` by a semi-colon.
+ Move the ``$a = foo() &&`` inside the if condition, before the ``$a == 2``.
+ Check for opening parenthesis, and make sure they are closed.
+ Check for previous statements that uses parenthesis, such as match, switch, if... and make sure they are closed.
