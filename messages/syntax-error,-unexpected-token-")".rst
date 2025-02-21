.. _syntax-error,-unexpected-token-")":

syntax error, unexpected token ")"
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ")": This error appeas when the parenthesis is needed, but not at that place.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;)&quot;
	:og:description: This error appeas when the parenthesis is needed, but not at that place
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ")"
	:twitter:description: syntax error, unexpected token ")": This error appeas when the parenthesis is needed, but not at that place
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\")\".html","name":"syntax error, unexpected token \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error appeas when the parenthesis is needed, but not at that place","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appeas when the parenthesis is needed, but not at that place. 

In the illustration, the parenthesis should be not be used directly after a multiplication sign: that operator needs a second operand.

Example
_______

.. code-block:: php

   <?php
   
   $a = (3 * 3 * );
   
   ?>

Solutions
_________

+ Add the missing operand to the previous operator.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"}"`
+ :ref:`syntax-error,-unexpected-token-"("`
+ :ref:`syntax-error,-unexpected-token-"]"`
