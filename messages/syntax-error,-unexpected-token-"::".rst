.. _syntax-error,-unexpected-token-"::":

syntax error, unexpected token "::"
-----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "::": In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;::&quot;
	:og:description: In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3A%3A%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "::"
	:twitter:description: syntax error, unexpected token "::": In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"::\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"::\".html","name":"syntax error, unexpected token \"::\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"::\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In this situation, the keyword ``or`` is reserved by PHP and cannot be used as a class name, a function name, or a global constant. 

By extension, the ``or`` keyword cannot be used in static object notations, such as calling a constant, or a static method or property.

This error may arise with other keywords, such as ``switch``, ``and``, ``foreach``, etc, for similar reasons. It also may happen when a new keyword is reserved by PHP, between two versions.

The error also appears when the left operand of the ``::`` is missing, or not applicable. Here, there is an illustration with ``echo``.

Example
_______

.. code-block:: php

   <?php
   
   1 or::A;
   
   echo ::class;
   
   ?>

Solutions
_________

+ Rename the class with a PHP non-keyword.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-'::',-expecting-'('`
