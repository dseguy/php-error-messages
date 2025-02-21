.. _syntax-error,-unexpected-token-"{",-expecting-","-or-";":

syntax error, unexpected token "{", expecting "," or ";"
--------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "{", expecting "," or ";": PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;{&quot;, expecting &quot;,&quot; or &quot;;&quot;
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%7B%22%2C-expecting-%22%2C%22-or-%22%3B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "{", expecting "," or ";"
	:twitter:description: syntax error, unexpected token "{", expecting "," or ";": PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"{\",-expecting-\",\"-or-\";\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"{\",-expecting-\",\"-or-\";\".html","name":"syntax error, unexpected token \"{\", expecting \",\" or \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"{\",-expecting-\",\"-or-\";\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.4 introduced property hooks, which allow defining getters and setters for properties directly in the property definition. Previous PHP versions did not support that syntax, and yield this error.

Example
_______

.. code-block:: php

   <?php
   
   class A {
       public $prop {
           get { return A; }
           set { echo __METHOD__, \n; }
       }
   }
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.4.
+ Remove the property hooks.
+ Move the property hooks to a method.
+ Move the property hooks to a magic method.
