.. _undefined-global-variable-%s:

Undefined global variable %s
----------------------------
 
.. meta::
	:description:
		Undefined global variable %s: $GLOBALS is a superglobal that stores all the defined global variables.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined global variable %s
	:og:description: $GLOBALS is a superglobal that stores all the defined global variables
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-global-variable-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined global variable %s
	:twitter:description: Undefined global variable %s: $GLOBALS is a superglobal that stores all the defined global variables
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-global-variable-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-global-variable-%s.html","name":"Undefined global variable %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 22 Jun 2025 17:59:46 +0000","dateModified":"Sun, 22 Jun 2025 17:59:46 +0000","description":"$GLOBALS is a superglobal that stores all the defined global variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined-global-variable-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
$GLOBALS is a superglobal that stores all the defined global variables. It yields this warning when trying to reach a global via one of its index.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
       echo $GLOBALS['a']; 
   }
   
   foo();
   
   ?>


Literal Examples
****************
+ Undefined global variable $a
+ Undefined global variable $GLOBALS

Solutions
_________

+ Create the global with the ``global`` keyword before accessing it.
