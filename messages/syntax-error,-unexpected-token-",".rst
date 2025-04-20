.. _syntax-error,-unexpected-token-",":

syntax error, unexpected token ","
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ",": A comma is used to separate arguments in a function call.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;,&quot;
	:og:description: A comma is used to separate arguments in a function call
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%2C%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ","
	:twitter:description: syntax error, unexpected token ",": A comma is used to separate arguments in a function call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\".html","name":"syntax error, unexpected token \",\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 20 Apr 2025 08:31:50 +0000","dateModified":"Sun, 20 Apr 2025 08:31:50 +0000","description":"A comma is used to separate arguments in a function call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A comma is used to separate arguments in a function call. A functioncall may also use named parameters, to identify the arguments. In this case, the name of the parameter is provided, but not its value.

Example
_______

.. code-block:: php

   <?php
   
       #[Attribute(name: , value: 1)]
       class X {}
   
   ?>

Solutions
_________

+ Remove the parameter name from the function call.
+ Provide a value for the parameter name in the functioncall.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-",",-expecting-"]"`
+ :ref:`syntax-error,-unexpected-token-",",-expecting-variable-or-"$"`
+ :ref:`syntax-error,-unexpected-token-",",-expecting-variable`
