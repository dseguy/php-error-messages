.. _readonly-property-%s::\$%s-must-have-type:

Readonly property %s::$%s must have type
----------------------------------------
 
.. meta::
	:description:
		Readonly property %s::$%s must have type: A ``readonly`` property must be typed.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Readonly property %s::$%s must have type
	:og:description: A ``readonly`` property must be typed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/readonly-property-%25s%3A%3A%24%25s-must-have-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readonly property %s::$%s must have type
	:twitter:description: Readonly property %s::$%s must have type: A ``readonly`` property must be typed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/readonly-property-%s::$%s-must-have-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/readonly-property-%s::$%s-must-have-type.html","name":"Readonly property %s::$%s must have type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Feb 2025 13:54:28 +0000","dateModified":"Sat, 22 Feb 2025 13:54:28 +0000","description":"A ``readonly`` property must be typed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly-property-%s::$%s-must-have-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A ``readonly`` property must be typed. It cannot be left without a type. In case of need of a wide range of types, use an union type, or the ``mixed`` keyword.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private readonly $property;
   }
   
   ?>


Literal Examples
****************
+ Readonly property X::$property must have type

Solutions
_________

+ Use the ``mixed`` type to explicitely type the property, but not commit to any constraint.
+ Use an union type to explicitely type the property, and commit to a restricted list of types.
+ Use the actual type for the property.
+ Remove the ``readonly`` option.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Classes/ReadonlyCompatibility <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/ReadonlyCompatibility.html>`_.
