.. _syntax-error,-unexpected-token-";",-expecting-identifier:

syntax error, unexpected token ";", expecting identifier
--------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";", expecting identifier: The ``use`` instruction is not finished properly: ``as`` expects a name after it.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;, expecting identifier
	:og:description: The ``use`` instruction is not finished properly: ``as`` expects a name after it
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-identifier.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";", expecting identifier
	:twitter:description: syntax error, unexpected token ";", expecting identifier: The ``use`` instruction is not finished properly: ``as`` expects a name after it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-identifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-identifier.html","name":"syntax error, unexpected token \";\", expecting identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ``use`` instruction is not finished properly: ``as`` expects a name after it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``use`` instruction is not finished properly: ``as`` expects a name after it.

Example
_______

.. code-block:: php

   <?php
   
   use A\B as ;
   
   ?>

Solutions
_________

+ Finish the ``use`` + ``as`` with an alias name.
+ Remove the ``as`` to make a simple ``use`` instruction.
