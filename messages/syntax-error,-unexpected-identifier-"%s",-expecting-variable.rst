.. _syntax-error,-unexpected-identifier-"%s",-expecting-variable:

syntax error, unexpected identifier "%s", expecting variable
------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting variable: A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting variable
	:og:description: A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s", expecting variable
	:twitter:description: syntax error, unexpected identifier "%s", expecting variable: A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable.html","name":"syntax error, unexpected identifier \"%s\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 12:39:44 +0000","dateModified":"Fri, 04 Jul 2025 12:39:44 +0000","description":"A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression.

The same error also appears when the intersectional type syntax is used: While ``A&`` is valid PHP 8.0, it should be followed by a variable (a parameter), and it finds another type.

Example
_______

.. code-block:: php

   <?php
   
   foreach($a as b) {}
   
   function foo(A&B $arg) {}
   
   ?>


Literal Examples
****************
+ syntax error, unexpected identifier "B", expecting variable
+ syntax error, unexpected identifier "b", expecting variable
+ syntax error, unexpected identifier "Countable", expecting variable

Solutions
_________

+ Add the missing ``$`` sign, to make the identifier an array.
+ Upgrade to PHP 8.2, with intersectional types.
+ Remove the intersectional types.
