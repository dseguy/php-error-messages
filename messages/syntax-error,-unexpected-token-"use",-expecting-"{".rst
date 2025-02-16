.. _syntax-error,-unexpected-token-"use",-expecting-"{":

syntax error, unexpected token "use", expecting "{"
---------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "use", expecting "{": The ``namespace`` command was now finished properly.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;use&quot;, expecting &quot;{&quot;
	:og:description: The ``namespace`` command was now finished properly
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22use%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "use", expecting "{"
	:twitter:description: syntax error, unexpected token "use", expecting "{": The ``namespace`` command was now finished properly
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"use\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"use\",-expecting-\"{\".html","name":"syntax error, unexpected token \"use\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The ``namespace`` command was now finished properly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"use\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``namespace`` command was now finished properly. It could be finished with a semi-colon ``;``, and ``use`` would be the next instruction. Or it could go be followed by a block of definition, that starts with an open curly bracket.

Example
_______

.. code-block:: php

   <?php
   
   namespace A\B\C
   
   use D\E;
   
   ?>

Solutions
_________

+ Finish the ``namespace`` with a semi colon.
+ Add a block to the ``namespace``, that encompass the ``use`` instruction.
