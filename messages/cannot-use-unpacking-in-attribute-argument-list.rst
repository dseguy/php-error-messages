.. _cannot-use-unpacking-in-attribute-argument-list:

Cannot use unpacking in attribute argument list
-----------------------------------------------
 
.. meta::
	:description:
		Cannot use unpacking in attribute argument list: Attribute arguments are compiled into constant expressions, and evaluated only when the attribute is read through Reflection.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use unpacking in attribute argument list
	:og:description: Attribute arguments are compiled into constant expressions, and evaluated only when the attribute is read through Reflection
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-unpacking-in-attribute-argument-list.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use unpacking in attribute argument list
	:twitter:description: Cannot use unpacking in attribute argument list: Attribute arguments are compiled into constant expressions, and evaluated only when the attribute is read through Reflection
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-unpacking-in-attribute-argument-list.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-unpacking-in-attribute-argument-list.html","name":"Cannot use unpacking in attribute argument list","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:31:39 +0000","dateModified":"Wed, 05 Aug 2026 11:31:39 +0000","description":"Attribute arguments are compiled into constant expressions, and evaluated only when the attribute is read through Reflection","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-unpacking-in-attribute-argument-list.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Attribute arguments are compiled into constant expressions, and evaluated only when the attribute is read through Reflection. The spread/unpacking operator ``...`` needs a runtime array to unpack, which conflicts with this compile time, constant-only nature of attribute arguments.

Unpacking is therefore not allowed in the argument list of an attribute, even when the array being spread only contains constant values.

Example
_______

.. code-block:: php

   <?php
   
   #[Attribute]
   class MyAttribute
   {
       public function __construct(int $a, int $b) {}
   }
   
   $args = [1, 2];
   
   #[MyAttribute(...$args)]
   class X {}
   
   ?>

Solutions
_________

+ List each argument explicitly, instead of unpacking an array.
+ Use named arguments instead, if this improves readability.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
