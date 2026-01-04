.. _syntax-error,-unexpected-';',-expecting-'{':

syntax error, unexpected ';', expecting '{'
-------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected ';', expecting '{': The error message comes from the possibility to use new lines inside fully qualified names, that was possible until PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;;&#039;, expecting &#039;{&#039;
	:og:description: The error message comes from the possibility to use new lines inside fully qualified names, that was possible until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3B%27%2C-expecting-%27%7B%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected ';', expecting '{'
	:twitter:description: syntax error, unexpected ';', expecting '{': The error message comes from the possibility to use new lines inside fully qualified names, that was possible until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-';',-expecting-'{'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-';',-expecting-'{'.html","name":"syntax error, unexpected ';', expecting '{'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 31 Dec 2025 05:49:49 +0000","dateModified":"Wed, 31 Dec 2025 05:49:49 +0000","description":"The error message comes from the possibility to use new lines inside fully qualified names, that was possible until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-';',-expecting-'{'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The error message comes from the possibility to use new lines inside fully qualified names, that was possible until PHP 8.0.

Example
_______

.. code-block:: php

   <?php
   
       \A 
                              \B 
                              \C
                              ;
   
   ?>

Solutions
_________

+ Remove the new lines and whitespaces inside a fully qualified name.
