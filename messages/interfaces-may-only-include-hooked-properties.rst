.. _interfaces-may-only-include-hooked-properties:

Interfaces may only include hooked properties
---------------------------------------------
 
	.. meta::
		:description:
			Interfaces may only include hooked properties: PHP 8.

		:og:type: article
		:og:title: Interfaces may only include hooked properties
		:og:description: PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/interfaces-may-only-include-hooked-properties.html

Description
___________
 
PHP 8.4 introduced the support for properties in interfaces. Although, the properties must have a property hook, aka one associated method that deals with ``get`` and ``set`` operations on that property.

Example
_______

.. code-block:: php

   <?php
   
   interface i {
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
