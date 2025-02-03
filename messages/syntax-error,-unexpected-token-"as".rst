.. _syntax-error,-unexpected-token-"as":

syntax-error,-unexpected-token-"as"
-----------------------------------
 
.. meta::
	:description:
		syntax-error,-unexpected-token-"as": The ``as`` token was found, but not expected.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax-error,-unexpected-token-&quot;as&quot;
	:og:description: The ``as`` token was found, but not expected
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22as%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax-error,-unexpected-token-"as"
	:twitter:description: syntax-error,-unexpected-token-"as": The ``as`` token was found, but not expected
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"as\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"as\".html","name":"syntax-error,-unexpected-token-\"as\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Feb 2025 18:33:31 +0000","dateModified":"Sun, 02 Feb 2025 18:33:31 +0000","description":"The ``as`` token was found, but not expected","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"as\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``as`` token was found, but not expected. 

Example
_______

.. code-block:: php

   <?php
   
   A\B as C;
   
   ?>

Solutions
_________

+ Add a missing ``use`` to start the instruction.
