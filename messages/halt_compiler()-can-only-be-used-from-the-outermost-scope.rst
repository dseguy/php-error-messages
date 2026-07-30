.. _halt_compiler()-can-only-be-used-from-the-outermost-scope:

__HALT_COMPILER() can only be used from the outermost scope
-----------------------------------------------------------
 
.. meta::
	:description:
		__HALT_COMPILER() can only be used from the outermost scope: __HALT_COMPILER() stops the compiler at the exact point it is encountered.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: __HALT_COMPILER() can only be used from the outermost scope
	:og:description: __HALT_COMPILER() stops the compiler at the exact point it is encountered
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/__halt_compiler%28%29-can-only-be-used-from-the-outermost-scope.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __HALT_COMPILER() can only be used from the outermost scope
	:twitter:description: __HALT_COMPILER() can only be used from the outermost scope: __HALT_COMPILER() stops the compiler at the exact point it is encountered
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/halt_compiler()-can-only-be-used-from-the-outermost-scope.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/halt_compiler()-can-only-be-used-from-the-outermost-scope.html","name":"__HALT_COMPILER() can only be used from the outermost scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:29:30 +0000","dateModified":"Thu, 30 Jul 2026 07:29:30 +0000","description":"__HALT_COMPILER() stops the compiler at the exact point it is encountered","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/halt_compiler()-can-only-be-used-from-the-outermost-scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
__HALT_COMPILER() stops the compiler at the exact point it is encountered; everything that follows in the file is no longer parsed as PHP code but kept as raw data, readable through the __COMPILER_HALT_OFFSET__ constant and a file handle on the same script. Because it changes how the rest of the file is interpreted, it is only meaningful once, at the very top level of the file, and cannot be placed inside a function, a class, a conditional block, or any other nested structure.

Example
_______

.. code-block:: php

   <?php
   
   function boot() {
   	__halt_compiler();
   }
   
   boot();
   
   ?>

Solutions
_________

+ Move the __halt_compiler() call out of the function/class/block, to the outermost level of the file.

Related Error Messages
______________________

+ :ref:`0-__halt_compiler()-can-only-be-used-from-the-outermost-scope`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
