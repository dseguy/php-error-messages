.. _cannot-use-temporary-expression-in-write-context:

Cannot use temporary expression in write context
------------------------------------------------
 
.. meta::
	:description:
		Cannot use temporary expression in write context: Literal values and constants, global or class, cannot be used for writing: they are immutable.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use temporary expression in write context
	:og:description: Literal values and constants, global or class, cannot be used for writing: they are immutable
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-temporary-expression-in-write-context.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use temporary expression in write context
	:twitter:description: Cannot use temporary expression in write context: Literal values and constants, global or class, cannot be used for writing: they are immutable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-temporary-expression-in-write-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-temporary-expression-in-write-context.html","name":"Cannot use temporary expression in write context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Literal values and constants, global or class, cannot be used for writing: they are immutable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-temporary-expression-in-write-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Literal values and constants, global or class, cannot be used for writing: they are immutable. When it is attempted nontheless, this error is displayed.

Those values must be placed in a container, such as a variable, array element, property or static property. That way, they become updatable.

The literal values may be hidden in a returned value, or by a call to native PHP functions which return literals. They may also be hidden in a foreach() call, which does implicit assignments.

This is also the case with the append ``$variable[]`` operator, and with object notations on a a constant. 

Passing a dimension fetch on a temporary by reference is also not allowed. 

The surprising error message comes from the temporary expression built by PHP, to allow a read access to the value. ``echo A->p;`` is a read access, while ``A->p = 3`` is a write access.

Example
_______

.. code-block:: php

   <?php
   
   // This emits the error
   A->p = 3;
   
   // This is a syntax error
   // A = 3;
   
   // Attempt to append 1 to an empty literal array
   [][] = 1;
   array()[] = 1;
   
   $a = array();
   $a[] = 1;
   
   $fn = function(&$ref) {};
   $fn([0, 1][0]);
   
   function goo() { return [0, 1][0];}
   // The constant is hidden in the function goo()
   $fn(goo());
   
   function hoo($fn) {
   	// PHP provide literal values
   	$fn(func_get_args()[0]);
   }
   
   ?>

Solutions
_________

+ Store the literal value in a variable, a property or an array index before writing to it.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-';',-expecting-'['`
+ :ref:`syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"["`
+ :ref:`syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"{"-or-"["`
