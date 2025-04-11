.. _syntax-error,-unexpected-identifier-"%s":

syntax error, unexpected identifier "%s"
----------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s": Named structures usually start with a keyword, such as ``class``, ``interface``, ``function``, etc.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;
	:og:description: Named structures usually start with a keyword, such as ``class``, ``interface``, ``function``, etc
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s"
	:twitter:description: syntax error, unexpected identifier "%s": Named structures usually start with a keyword, such as ``class``, ``interface``, ``function``, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\".html","name":"syntax error, unexpected identifier \"%s\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Named structures usually start with a keyword, such as ``class``, ``interface``, ``function``, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Named structures usually start with a keyword, such as ``class``, ``interface``, ``function``, etc. This is missing in this code.

Example
_______

.. code-block:: php

   <?php
   
   A extends B {}
   
   ?>


Literal Examples
****************
+ syntax error, unexpected identifier "A"

Solutions
_________

+ Add the missing keyword before the identifier.
