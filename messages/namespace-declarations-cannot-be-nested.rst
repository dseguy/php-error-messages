.. _namespace-declarations-cannot-be-nested:

Namespace declarations cannot be nested
---------------------------------------
 
.. meta::
	:description:
		Namespace declarations cannot be nested: Namespace declaration, with blocks, cannot be nested one into the other.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Namespace declarations cannot be nested
	:og:description: Namespace declaration, with blocks, cannot be nested one into the other
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/namespace-declarations-cannot-be-nested.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Namespace declarations cannot be nested
	:twitter:description: Namespace declarations cannot be nested: Namespace declaration, with blocks, cannot be nested one into the other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/namespace-declarations-cannot-be-nested.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/namespace-declarations-cannot-be-nested.html","name":"Namespace declarations cannot be nested","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 11 Nov 2024 21:20:14 +0000","dateModified":"Mon, 11 Nov 2024 21:20:14 +0000","description":"Namespace declaration, with blocks, cannot be nested one into the other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace-declarations-cannot-be-nested.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Namespace declaration, with blocks, cannot be nested one into the other. Namespaces must be one next to each other. 

Usually, there is only one namespace per file, without a block.


Example
_______

.. code-block:: php

   <?php
   
   namespace A {
       namespace B {
       
       }
   }
   
   ?>

Solutions
_________

+ Make the namespaces next to each other; concatenate the names to create deep namespaces: ``namespace A\B {..}``.
+ Split the code into several files, each with only one namespace.
