.. _syntax-error,-unexpected-identifier-"%s":

syntax error, unexpected identifier "%s"
----------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s": This error appears when two identifiers are following each other.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;
	:og:description: This error appears when two identifiers are following each other
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s"
	:twitter:description: syntax error, unexpected identifier "%s": This error appears when two identifiers are following each other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\".html","name":"syntax error, unexpected identifier \"%s\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 20 Apr 2025 08:00:21 +0000","dateModified":"Sun, 20 Apr 2025 08:00:21 +0000","description":"This error appears when two identifiers are following each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when two identifiers are following each other. This is usually rooted in a missing keyword or character.

Named structures usually start with a keyword, such as ``class``, ``interface``, ``function``, etc. 

In a function call, a missing opening parenthese brings the named parameter and the function name together.

Example
_______

.. code-block:: php

   <?php
   
   // missing starting class or interface keyword
   A extends B {}
   
   // missing opening parenthese
   foo name:1);
   
   ?>


Literal Examples
****************
+ syntax error, unexpected identifier "A"

Solutions
_________

+ Add the missing keyword before the identifier.
+ Add a missing opening parenthese to the function call.
