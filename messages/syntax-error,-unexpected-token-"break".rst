.. _syntax-error,-unexpected-token-"break":

syntax error, unexpected token "break"
--------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "break": break is a token that stop the current loop or switch, and proceed from the end of that loop.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;break&quot;
	:og:description: break is a token that stop the current loop or switch, and proceed from the end of that loop
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22break%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "break"
	:twitter:description: syntax error, unexpected token "break": break is a token that stop the current loop or switch, and proceed from the end of that loop
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"break\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"break\".html","name":"syntax error, unexpected token \"break\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"break is a token that stop the current loop or switch, and proceed from the end of that loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"break\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
break is a token that stop the current loop or switch, and proceed from the end of that loop. ``break`` is standalone expression, and cannot be part of another expression: this is why it is forbidden in the array, or the ``match`` command.

Example
_______

.. code-block:: php

   <?php
       // break does not fit everwhere
       $a = [1 => break ];
   
       // break is for switch, not match
       $b = match($c) {
           1 => break,
       };
   
   ?>

Solutions
_________

+ Remove the break, and find another way to jump out of the loop.

Related Error Messages
______________________

+ :ref:`'%s'-not-in-the-'loop'-or-'switch'-context`
