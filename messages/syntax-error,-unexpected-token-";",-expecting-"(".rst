.. _syntax-error,-unexpected-token-";",-expecting-"(":

syntax error, unexpected token ";", expecting "("
-------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";", expecting "(": This syntax error is related to a new PHP feature.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;, expecting &quot;(&quot;
	:og:description: This syntax error is related to a new PHP feature
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-%22%28%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";", expecting "("
	:twitter:description: syntax error, unexpected token ";", expecting "(": This syntax error is related to a new PHP feature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"(\".html","name":"syntax error, unexpected token \";\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 30 Aug 2025 21:03:51 +0000","dateModified":"Sat, 30 Aug 2025 21:03:51 +0000","description":"This syntax error is related to a new PHP feature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This syntax error is related to a new PHP feature. In PHP 8.3, a new syntax for dynamic access to class constants was introduced. It was not supported until then.

Example
_______

.. code-block:: php

   <?php
   
   class A {
   	public const A = 1;
   }
   
   $b = 'A';
   
   echo A::{$b};
   
   ?>

Solutions
_________

+ Upgrade PHP to PHP 8.3 or more recent.
+ Use a call to constant() to reach the value of the class constant.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Classes/DynamicConstantCall <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/DynamicConstantCall.html>`_.
