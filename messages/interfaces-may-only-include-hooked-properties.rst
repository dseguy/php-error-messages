.. _interfaces-may-only-include-hooked-properties:

Interfaces may only include hooked properties
---------------------------------------------
 
.. meta::
	:description:
		Interfaces may only include hooked properties: PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Interfaces may only include hooked properties
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/interfaces-may-only-include-hooked-properties.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interfaces may only include hooked properties
	:twitter:description: Interfaces may only include hooked properties: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interfaces-may-only-include-hooked-properties.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interfaces-may-only-include-hooked-properties.html","name":"Interfaces may only include hooked properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interfaces-may-only-include-hooked-properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.4 introduced the support for properties in interfaces. Although, the properties must have a property hook, aka one associated method that deals with ``get`` and ``set`` operations on that property.

Example
_______

.. code-block:: php

   <?php
   
   interface I {
       public $property;
   
       public $propertyWithHook {
       	// This is an abstract property
       	get;
       };
   
   }
   ?>

Solutions
_________

+ Add an identity hook, such as ``get => $this->property = $value;``, which is the default behavior.
+ Turn the interface into an abstract class.
+ Turn the interface into a trait.


In more recent PHP versions, this error message is now :ref:`interfaces-may-not-include-properties`.
