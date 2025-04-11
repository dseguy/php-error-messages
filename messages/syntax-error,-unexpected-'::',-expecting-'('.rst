.. _syntax-error,-unexpected-'::',-expecting-'(':

syntax error, unexpected '::', expecting '('
--------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected '::', expecting '(': This is a situation where a new keyword degrades a previously valid syntax.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;::&#039;, expecting &#039;(&#039;
	:og:description: This is a situation where a new keyword degrades a previously valid syntax
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3A%3A%27%2C-expecting-%27%28%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected '::', expecting '('
	:twitter:description: syntax error, unexpected '::', expecting '(': This is a situation where a new keyword degrades a previously valid syntax
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'::',-expecting-'('.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'::',-expecting-'('.html","name":"syntax error, unexpected '::', expecting '('","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This is a situation where a new keyword degrades a previously valid syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'::',-expecting-'('.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This is a situation where a new keyword degrades a previously valid syntax. ``match`` is a new keyword in PHP 8.0, for the eponymous command. It cannot be used as a class name, a function name, or a global constant, as before. 

By extension, the ``match`` keyword cannot be used in static object notations, such as calling a constant, or a static method or property.

This error may arise with other keywords, for similar reasons.

Example
_______

.. code-block:: php

   <?php
   
   echo Match::A;
   
   ?>

Solutions
_________

+ Rename the ``match`` class to a non-keyword name.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"::"`
