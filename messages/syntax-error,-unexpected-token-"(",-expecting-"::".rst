.. _syntax-error,-unexpected-token-"(",-expecting-"::":

syntax error, unexpected token "(", expecting "::"
--------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "(", expecting "::": This error appears when calling ``static`` as a function.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;(&quot;, expecting &quot;::&quot;
	:og:description: This error appears when calling ``static`` as a function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%28%22%2C-expecting-%22%3A%3A%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "(", expecting "::"
	:twitter:description: syntax error, unexpected token "(", expecting "::": This error appears when calling ``static`` as a function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\",-expecting-\"::\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\",-expecting-\"::\".html","name":"syntax error, unexpected token \"(\", expecting \"::\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 18 Apr 2025 15:08:00 +0000","dateModified":"Fri, 18 Apr 2025 15:08:00 +0000","description":"This error appears when calling ``static`` as a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\",-expecting-\"::\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when calling ``static`` as a function. ``static`` cannot be used as a function name. It may be used as class name, in a ``new`` expression, or as an method. It is often used in a static call, for methods, constant or properties.

It is not recommended to use ``static`` as a method name.

Example
_______

.. code-block:: php

   <?php
   
   static();
   
   ?>

Solutions
_________

+ Add the object before the method name.
+ Add the class name and ``::`` before the method name.
+ Add the ``new`` operator before the ``static`` keyword. Make sure that code is within a class or assimilated.
