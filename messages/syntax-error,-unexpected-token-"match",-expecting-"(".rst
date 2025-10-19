.. _syntax-error,-unexpected-token-"match",-expecting-"(":

syntax error, unexpected token "match", expecting "("
-----------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "match", expecting "(": Since ``match`` was introduced as a PHP keyword, it cannot be used anymore to name a class, interface, enum, trait, function or global constant.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;match&quot;, expecting &quot;(&quot;
	:og:description: Since ``match`` was introduced as a PHP keyword, it cannot be used anymore to name a class, interface, enum, trait, function or global constant
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22match%22%2C-expecting-%22%28%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "match", expecting "("
	:twitter:description: syntax error, unexpected token "match", expecting "(": Since ``match`` was introduced as a PHP keyword, it cannot be used anymore to name a class, interface, enum, trait, function or global constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"match\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"match\",-expecting-\"(\".html","name":"syntax error, unexpected token \"match\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 27 Sep 2025 07:44:37 +0000","dateModified":"Sat, 27 Sep 2025 07:44:37 +0000","description":"Since ``match`` was introduced as a PHP keyword, it cannot be used anymore to name a class, interface, enum, trait, function or global constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"match\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since ``match`` was introduced as a PHP keyword, it cannot be used anymore to name a class, interface, enum, trait, function or global constant. It may be used to name a class constant, method or property.

Example
_______

.. code-block:: php

   <?php
   
   function match($a) {}
   
   ?>

Solutions
_________

+ Change the name ``match``.
+ Make the function a method in a class.
