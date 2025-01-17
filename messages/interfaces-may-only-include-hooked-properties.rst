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
