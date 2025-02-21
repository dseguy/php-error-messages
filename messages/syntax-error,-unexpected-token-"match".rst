.. _syntax-error,-unexpected-token-"match":

syntax error, unexpected token "match"
--------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "match": In PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;match&quot;
	:og:description: In PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22match%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "match"
	:twitter:description: syntax error, unexpected token "match": In PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"match\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"match\".html","name":"syntax error, unexpected token \"match\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"In PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"match\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In PHP 8.0, the ``match`` statement was added to PHP feature: it is a similar feature to ``switch``. ``match`` is now a PHP reserved keyword, and, as such, cannot be used everywhere. For example, it cannot be used as a class, function or interface name; it cannot be used in a function call, although it may be used in method call.

Example
_______

.. code-block:: php

   <?php
   
   $x = match ($a) {};
   
   ?>

Solutions
_________

+ Change the name to something else than ``match``.
