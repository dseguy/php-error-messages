.. _strict_types-declaration-must-be-the-very-first-statement-in-the-script:

strict_types declaration must be the very first statement in the script
-----------------------------------------------------------------------
 
.. meta::
	:description:
		strict_types declaration must be the very first statement in the script: This error appears when the declare statement is not the first statement in the file.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: strict_types declaration must be the very first statement in the script
	:og:description: This error appears when the declare statement is not the first statement in the file
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strict_types declaration must be the very first statement in the script
	:twitter:description: strict_types declaration must be the very first statement in the script: This error appears when the declare statement is not the first statement in the file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html","name":"strict_types declaration must be the very first statement in the script","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"This error appears when the declare statement is not the first statement in the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when the declare statement is not the first statement in the file. 

It appears even when non-executing statement are placed before it, such as forgotten characters before the opening tag, any kind of operations in PHP commands, including definitions, namespaces, etc.

Other declare() calls may appears before the strict_types one, though. Also, PHP uses this error with the other declare statement, such as ``ticks`` or ``encoding``. They are very rare though.

Example
_______

.. code-block:: php

   Here<?php
   
   $a = 1;
   declare(strict_types = 1);
   
   ?>

Solutions
_________

+ Check if any characters are left before the opening PHP tag.
+ Move the declare after the PHP opening tag.
