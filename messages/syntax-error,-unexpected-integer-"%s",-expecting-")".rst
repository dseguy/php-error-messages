.. _syntax-error,-unexpected-integer-"%s",-expecting-")":

syntax error, unexpected integer "%s", expecting ")"
----------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected integer "%s", expecting ")": This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected integer &quot;%s&quot;, expecting &quot;)&quot;
	:og:description: This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-integer-%22%25s%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected integer "%s", expecting ")"
	:twitter:description: syntax error, unexpected integer "%s", expecting ")": This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-integer-\"%s\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-integer-\"%s\",-expecting-\")\".html","name":"syntax error, unexpected integer \"%s\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 31 Jul 2025 05:23:04 +0000","dateModified":"Thu, 31 Jul 2025 05:23:04 +0000","description":"This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-integer-\"%s\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is a variation of the named parameter typo: the missing semi colon between the name and the value leads to an identifier next to an unrelated operator. The suggestion to use a closing parenthese is valid, though not the only one.

Example
_______

.. code-block:: php

   <?php
   
   foo(arg new B());
   
   class B {}
   
   function foo(B $arg) {}
   
   ?>

Solutions
_________

+ Add the missing ``:`` before the integer.
+ Add the missing ``)`` before the integer, and may be a comma, depending on the context.
