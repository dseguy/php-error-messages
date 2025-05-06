.. _syntax-error,-unexpected-token-",",-expecting-")":

syntax error, unexpected token ",", expecting ")"
-------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ",", expecting ")": The ``new`` call was not properly closed with a closing parenthese, and PHP found a closing square bracket, instead.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;,&quot;, expecting &quot;)&quot;
	:og:description: The ``new`` call was not properly closed with a closing parenthese, and PHP found a closing square bracket, instead
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%2C%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ",", expecting ")"
	:twitter:description: syntax error, unexpected token ",", expecting ")": The ``new`` call was not properly closed with a closing parenthese, and PHP found a closing square bracket, instead
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\",-expecting-\")\".html","name":"syntax error, unexpected token \",\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 27 Apr 2025 20:17:36 +0000","dateModified":"Sun, 27 Apr 2025 20:17:36 +0000","description":"The ``new`` call was not properly closed with a closing parenthese, and PHP found a closing square bracket, instead","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``new`` call was not properly closed with a closing parenthese, and PHP found a closing square bracket, instead. 

Example
_______

.. code-block:: php

   <?php
   
   #[A(new X( a: 'b',    ]
   class X {}
       
   ?>

Solutions
_________

+ Add a closing parenthese after the comma.
+ Remove the comma, and add a closing parenthese.
