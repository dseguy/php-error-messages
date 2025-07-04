.. _constant-expression-contains-invalid-operations:

Constant expression contains invalid operations
-----------------------------------------------
 
.. meta::
	:description:
		Constant expression contains invalid operations: The Constant expressions are the value of a constant, global or class, that is not a literal value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Constant expression contains invalid operations
	:og:description: The Constant expressions are the value of a constant, global or class, that is not a literal value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant expression contains invalid operations
	:twitter:description: Constant expression contains invalid operations: The Constant expressions are the value of a constant, global or class, that is not a literal value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constant-expression-contains-invalid-operations.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constant-expression-contains-invalid-operations.html","name":"Constant expression contains invalid operations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Jul 2025 18:09:43 +0000","dateModified":"Tue, 01 Jul 2025 18:09:43 +0000","description":"The Constant expressions are the value of a constant, global or class, that is not a literal value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constant-expression-contains-invalid-operations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The Constant expressions are the value of a constant, global or class, that is not a literal value. They are calculated. 

Constant expressions allows literals, other constants, and most of the operators. Some elements are forbidden: variables, functions, methods and cast operators. 

Properties are allowed, but only on enumeration's cases. New and arrays are allowed, and so does the ternary and coalesce operators, leading to possible conditional constants expressions (sic). Magic constant are also OK.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	// invalid, because of the usage of the variable
   	const X = $a;
   }
   
   ?>

Solutions
_________

+ Remove the invalid elements or operations.

Related Error Messages
______________________

+ :ref:`fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `cloneConstant <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/cloneConstant.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `cloneConstant <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/cloneConstant.html>`_.
