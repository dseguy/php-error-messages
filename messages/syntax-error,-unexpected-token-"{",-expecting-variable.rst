.. _syntax-error,-unexpected-token-"{",-expecting-variable:

syntax error, unexpected token "{", expecting variable
------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "{", expecting variable: With the last comma in the signature of the method, PHP expects another parameter after it, or the end of the signature with a closing parenthesis.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;{&quot;, expecting variable
	:og:description: With the last comma in the signature of the method, PHP expects another parameter after it, or the end of the signature with a closing parenthesis
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%7B%22%2C-expecting-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "{", expecting variable
	:twitter:description: syntax error, unexpected token "{", expecting variable: With the last comma in the signature of the method, PHP expects another parameter after it, or the end of the signature with a closing parenthesis
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"{\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"{\",-expecting-variable.html","name":"syntax error, unexpected token \"{\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 20 Apr 2025 08:39:35 +0000","dateModified":"Sun, 20 Apr 2025 08:39:35 +0000","description":"With the last comma in the signature of the method, PHP expects another parameter after it, or the end of the signature with a closing parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"{\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
With the last comma in the signature of the method, PHP expects another parameter after it, or the end of the signature with a closing parenthesis.

Example
_______

.. code-block:: php

   <?php
   
   class A {
       public function __construct($b,
        { }
   }
   ?>

Solutions
_________

+ Add a closing parenthesis.
+ Add another parameter, then a closing parenthesis.
