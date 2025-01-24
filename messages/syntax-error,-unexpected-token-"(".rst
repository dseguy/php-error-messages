.. _syntax-error,-unexpected-token-"(":

syntax error, unexpected token "("
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "(": A class cannot hold a closure, only method, which are functions with a name.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;(&quot;
	:og:description: A class cannot hold a closure, only method, which are functions with a name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%28%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "("
	:twitter:description: syntax error, unexpected token "(": A class cannot hold a closure, only method, which are functions with a name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\".html","name":"syntax error, unexpected token \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 21 Jan 2025 10:39:07 +0000","dateModified":"Tue, 21 Jan 2025 10:39:07 +0000","description":"A class cannot hold a closure, only method, which are functions with a name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A class cannot hold a closure, only method, which are functions with a name.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function () {}
   }
   
   ?>

Solutions
_________

+ Add the name to the method.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"}"`
