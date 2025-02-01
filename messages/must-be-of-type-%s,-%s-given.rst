.. _must-be-of-type-%s,-%s-given:

must be of type %s, %s given
----------------------------
 
.. meta::
	:description:
		must be of type %s, %s given: This error message reports that the types of the provided arguments are not compatible with the expected types.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be of type %s, %s given
	:og:description: This error message reports that the types of the provided arguments are not compatible with the expected types
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-%25s%2C-%25s-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be of type %s, %s given
	:twitter:description: must be of type %s, %s given: This error message reports that the types of the provided arguments are not compatible with the expected types
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-of-type-%s,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-of-type-%s,-%s-given.html","name":"must be of type %s, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 01 Feb 2025 09:40:57 +0000","dateModified":"Sat, 01 Feb 2025 09:40:57 +0000","description":"This error message reports that the types of the provided arguments are not compatible with the expected types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-of-type-%s,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error message reports that the types of the provided arguments are not compatible with the expected types. 

Such a conflict appears in various situations: 
+ a scalar type is used when another incompatible type is expected: using an array instead of a integer.
+ a compatible type is provided when strict_types is active: for example, using a numeric string or a stringable object with a ``string`` type.
+ a parent class is used where a child type is expected: object types accept child classes, not parent ones.
+ the type is an interface, and the provided object is not implementing it explicitely
+ the type has a typo
+ the type should is not the one that is the specifications.

Example
_______

.. code-block:: php

   <?php
   
   function foo(int $i) {}
   foo([]);
   // with strict_types = 1
   foo(1.0);
   
   class A {}
   class B extends A {}
   
   function goo(B $b) {}
   goo(new A);
   
   ?>


Literal Examples
****************
+ must be of type Traversable, int given
+ must be of type int, array given
+ must be of type int, float given
+ must be of type A, B given

Solutions
_________

+ Remove the type.
+ Fix the parameter type.
+ Fix the argument type: convert it to the expected type.
