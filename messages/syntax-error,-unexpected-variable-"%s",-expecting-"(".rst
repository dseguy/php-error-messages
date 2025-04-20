.. _syntax-error,-unexpected-variable-"%s",-expecting-"(":

syntax error, unexpected variable "%s", expecting "("
-----------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected variable "%s", expecting "(": In a function definition, the name of the function is separated from the argument list by an opening parenthesis.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected variable &quot;%s&quot;, expecting &quot;(&quot;
	:og:description: In a function definition, the name of the function is separated from the argument list by an opening parenthesis
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-variable-%22%25s%22%2C-expecting-%22%28%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected variable "%s", expecting "("
	:twitter:description: syntax error, unexpected variable "%s", expecting "(": In a function definition, the name of the function is separated from the argument list by an opening parenthesis
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-variable-\"%s\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-variable-\"%s\",-expecting-\"(\".html","name":"syntax error, unexpected variable \"%s\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 20 Apr 2025 08:38:16 +0000","dateModified":"Sun, 20 Apr 2025 08:38:16 +0000","description":"In a function definition, the name of the function is separated from the argument list by an opening parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-variable-\"%s\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In a function definition, the name of the function is separated from the argument list by an opening parenthesis. This is missing here. This applied to closures, arrow functions and methods' signatures.

Example
_______

.. code-block:: php

   <?php
   
       function foo $name: , $value = 1) {}
       function bar ) {}
   
   ?>

Solutions
_________

+ Add the missing opening parenthesis.
+ Provide a value for the parameter name in the functioncall.

Related Error Messages
______________________

+ :ref:`unmatched-')'`
