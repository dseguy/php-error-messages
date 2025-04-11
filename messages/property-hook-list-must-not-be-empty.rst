.. _property-hook-list-must-not-be-empty:

Property hook list must not be empty
------------------------------------
 
.. meta::
	:description:
		Property hook list must not be empty: It is possible to add a block, after a property definition.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property hook list must not be empty
	:og:description: It is possible to add a block, after a property definition
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-hook-list-must-not-be-empty.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property hook list must not be empty
	:twitter:description: Property hook list must not be empty: It is possible to add a block, after a property definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-hook-list-must-not-be-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-hook-list-must-not-be-empty.html","name":"Property hook list must not be empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is possible to add a block, after a property definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-hook-list-must-not-be-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is possible to add a block, after a property definition. This is where the ``get`` and ``set`` methods are defined. There can be one or two of these methods, but the block just cannot be left empty.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public int $p = 3 {	}
   }
   
   ?>

Solutions
_________

+ Create at least one accessor method in the block.
+ Remove the block.
