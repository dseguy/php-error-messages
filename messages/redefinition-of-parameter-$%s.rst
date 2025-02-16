.. _redefinition-of-parameter-\$%s:

Redefinition of parameter $%s
-----------------------------
 
.. meta::
	:description:
		Redefinition of parameter $%s: Parameters must all have distinct names in a method signature.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Redefinition of parameter $%s
	:og:description: Parameters must all have distinct names in a method signature
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/redefinition-of-parameter-%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Redefinition of parameter $%s
	:twitter:description: Redefinition of parameter $%s: Parameters must all have distinct names in a method signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/redefinition-of-parameter-$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/redefinition-of-parameter-$%s.html","name":"Redefinition of parameter $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Parameters must all have distinct names in a method signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/redefinition-of-parameter-$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Parameters must all have distinct names in a method signature. Before PHP 7.0, no error was emitted, and the last parameter's value was used. In PHP 7.0 and more recent, it is a compilation error.

Example
_______

.. code-block:: php

   <?php
   
   function foo($b, $b, $b) {}
   
   ?>


Literal Examples
****************
+ Redefinition of parameter $b

Solutions
_________

+ Use all different names for the parameters.
