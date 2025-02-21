.. _fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed:

Fetching properties on non-enums in constant expressions is not allowed
-----------------------------------------------------------------------
 
.. meta::
	:description:
		Fetching properties on non-enums in constant expressions is not allowed: Constant expressions are expressions that build the value of a constant.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Fetching properties on non-enums in constant expressions is not allowed
	:og:description: Constant expressions are expressions that build the value of a constant
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fetching properties on non-enums in constant expressions is not allowed
	:twitter:description: Fetching properties on non-enums in constant expressions is not allowed: Constant expressions are expressions that build the value of a constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed.html","name":"Fetching properties on non-enums in constant expressions is not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Constant expressions are expressions that build the value of a constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Constant expressions are expressions that build the value of a constant. A subset of the features of PHP are available in these expressions. 

In particular, objects are allowed, but it is not possible to fetch properties nor call methods. In fact, properties are allowed, but on a specific type of object: enumeration cases.

Example
_______

.. code-block:: php

   <?php
   
   class Y {
   	public $y = 1;
   }
   
   const Y = new Y();
   
   enum Z : string {
   	case Z = 'foo';
   }
   
   class X {
   	const XZ = Z::z->value;
   	const X = Y->y;
   }
   
   // OK
   echo X::XZ;
   
   //Fetching properties on non-enums in constant expressions is not allowed
   echo X::X;
   
   ?>

Solutions
_________

+ Do not use properties in constant expressions.

Related Error Messages
______________________

+ :ref:`constant-expression-contains-invalid-operations`
