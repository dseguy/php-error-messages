.. _syntax-error,-unexpected-token-"(",-expecting-variable:

syntax error, unexpected token "(", expecting variable
------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "(", expecting variable: PHP started recognizing a property definition, with its visibility, a type and now expects a variable name.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;(&quot;, expecting variable
	:og:description: PHP started recognizing a property definition, with its visibility, a type and now expects a variable name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%28%22%2C-expecting-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "(", expecting variable
	:twitter:description: syntax error, unexpected token "(", expecting variable: PHP started recognizing a property definition, with its visibility, a type and now expects a variable name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\",-expecting-variable.html","name":"syntax error, unexpected token \"(\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Feb 2025 14:04:07 +0000","dateModified":"Sat, 22 Feb 2025 14:04:07 +0000","description":"PHP started recognizing a property definition, with its visibility, a type and now expects a variable name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP started recognizing a property definition, with its visibility, a type and now expects a variable name. In fact, the ``function`` keyword was omitted.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public  __construct () {}
   }
   
   ?>

Solutions
_________

+ Add the ``function`` keyword, before the name of the method.
+ Remove the parenthesis and the following tokens, and make a proper property definition.
