.. _undefined-variable-\$%s:

Undefined variable $%S
----------------------
 
.. meta::
	:description:
		Undefined variable $%S: This error appears when a variable is used, aka read, while it was not defined before.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined variable $%S
	:og:description: This error appears when a variable is used, aka read, while it was not defined before
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-variable-%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined variable $%S
	:twitter:description: Undefined variable $%S: This error appears when a variable is used, aka read, while it was not defined before
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-variable-$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-variable-$%s.html","name":"Undefined variable $%S","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Jun 2025 16:33:13 +0000","dateModified":"Mon, 16 Jun 2025 16:33:13 +0000","description":"This error appears when a variable is used, aka read, while it was not defined before","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined-variable-$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when a variable is used, aka read, while it was not defined before. 

This might be a variable passed by argument to a method; a variable used with a short assignation operator or an argument of the PHP native function ``compact``.

Example
_______

.. code-block:: php

   <?php
   
   $x += 1;
   
   foo($a);
   
   compact('undefined');
   
   function foo($a) {}
   
   ?>

Solutions
_________

+ Use another variable.
+ Check the variable before usage.
+ Give a default value to the variable before usage.
