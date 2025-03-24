.. _syntax-error,-unexpected-token-"private",-expecting-"(":

syntax error, unexpected token "private", expecting "("
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "private", expecting "(": The opening parenthesis that follows a method name is missing.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;private&quot;, expecting &quot;(&quot;
	:og:description: The opening parenthesis that follows a method name is missing
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22private%22%2C-expecting-%22%28%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "private", expecting "("
	:twitter:description: syntax error, unexpected token "private", expecting "(": The opening parenthesis that follows a method name is missing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\"(\".html","name":"syntax error, unexpected token \"private\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 17:53:59 +0000","dateModified":"Mon, 24 Mar 2025 17:53:59 +0000","description":"The opening parenthesis that follows a method name is missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The opening parenthesis that follows a method name is missing. It would be followed by a promoted property declaration, which starts with private.

The same error may apply with the other PHP visibilities, or property options, such as ``static`` or ``readonly``.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public function __construct
           private Y $y,
       ) {
       }
   }
   
   ?>

Solutions
_________

+ Add the missing opening parenthesis.
