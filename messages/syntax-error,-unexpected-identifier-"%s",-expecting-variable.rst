.. _syntax-error,-unexpected-identifier-"%s",-expecting-variable:

syntax error, unexpected identifier "%s", expecting variable
------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting variable: A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
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
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable.html","name":"syntax error, unexpected identifier \"%s\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A foreach() structure requires a variable after the ``as`` keyword: in fact, it may be a variable, a property, a static property, an array index or the ``list()`` expression.

Example
_______

.. code-block:: php

   <?php
   
   foreach($a as b) {}
   
   ?>

Solutions
_________

+ Add the missing ``$`` sign, to make the identifier an array.
