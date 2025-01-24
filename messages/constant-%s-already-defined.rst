.. _constant-%s-already-defined:

Constant %s already defined
---------------------------
 
.. meta::
	:description:
		Constant %s already defined: When a global constant is defined again, PHP reports a warning, and ignores the second definition.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Constant %s already defined
	:og:description: When a global constant is defined again, PHP reports a warning, and ignores the second definition
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/constant-%25s-already-defined.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant %s already defined
	:twitter:description: Constant %s already defined: When a global constant is defined again, PHP reports a warning, and ignores the second definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constant-%s-already-defined.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constant-%s-already-defined.html","name":"Constant %s already defined","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 26 Dec 2024 14:59:56 +0000","dateModified":"Thu, 26 Dec 2024 14:59:56 +0000","description":"When a global constant is defined again, PHP reports a warning, and ignores the second definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constant-%s-already-defined.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a global constant is defined again, PHP reports a warning, and ignores the second definition.

This error applies to global constants only: class constants emit a fatal error, and a different message.


Example
_______

.. code-block:: php

   <?php
   
   const A = 1;
   const A = 2;
   
   echo A;
   
   define('A', 3);
   echo A;
   
   ?>


Literal Examples
****************
+ Constant A already defined

Solutions
_________

+ Remove the second definition.
+ Remove the first definition.
+ Fix the name of one of the constants.
+ Check if there are no missing namespace.

Related Error Messages
______________________

+ :ref:`cannot-redefine-class-constant`
