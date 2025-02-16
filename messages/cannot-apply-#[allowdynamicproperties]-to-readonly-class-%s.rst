.. _cannot-apply-#[allowdynamicproperties]-to-readonly-class-%s:

Cannot apply #[AllowDynamicProperties] to readonly class %s
-----------------------------------------------------------
 
.. meta::
	:description:
		Cannot apply #[AllowDynamicProperties] to readonly class %s: Readonly classes are classes whose properties are set once, and never changed afterwards.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot apply #[AllowDynamicProperties] to readonly class %s
	:og:description: Readonly classes are classes whose properties are set once, and never changed afterwards
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-apply-%23%5Ballowdynamicproperties%5D-to-readonly-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot apply #[AllowDynamicProperties] to readonly class %s
	:twitter:description: Cannot apply #[AllowDynamicProperties] to readonly class %s: Readonly classes are classes whose properties are set once, and never changed afterwards
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-apply-#[allowdynamicproperties]-to-readonly-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-apply-#[allowdynamicproperties]-to-readonly-class-%s.html","name":"Cannot apply #[AllowDynamicProperties] to readonly class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Readonly classes are classes whose properties are set once, and never changed afterwards","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-apply-#[allowdynamicproperties]-to-readonly-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Readonly classes are classes whose properties are set once, and never changed afterwards. The readonly option may be added to the individual property, or globally, at the class level. 

Since PHP 8.1, dynamic properties are deprecated. A dynamic property is a property which is used at execution time, aka ``$object->dynamic = 2;``, and has no explicit definition in the class block. Dynamic properties are created, yet they don't have any option, including the ``readonly`` option. In consequence, ``#[AllowDynamicProperties]`` and ``readonly`` at the class level are incompatible.`.

Example
_______

.. code-block:: php

   <?php
   
   #[AllowDynamicProperties]
   readonly class X {
   	private $property = 1;
   }
   
   ?>


Literal Examples
****************
+ Cannot apply #[AllowDynamicProperties] to readonly class x

Solutions
_________

+ Remove ``readonly`` from the class, and add it to all the properties in the class.
+ Create a readonly property with a another class which use the ``#[AllowDynamicProperties]`` attribute.
+ Create a readonly property with an array type, and use it to process the dynamic entries.
+ Remove the ``#[AllowDynamicProperties]`` attribute.
