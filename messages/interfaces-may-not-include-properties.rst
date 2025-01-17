.. _interfaces-may-not-include-properties:

Interfaces may not include properties
-------------------------------------
 
.. meta::
	:description:
		Interfaces may not include properties: Interfaces can define methods and constants, though they can&#039;t define properties.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Interfaces may not include properties
	:og:description: Interfaces can define methods and constants, though they can&#039;t define properties
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/interfaces-may-not-include-properties.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interfaces may not include properties
	:twitter:description: Interfaces may not include properties: Interfaces can define methods and constants, though they can't define properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Interfaces can define methods and constants, though they can't define properties.

Example
_______

.. code-block:: php

   <?php
   
   interface I {
   	private $property;
   }
   
   ?>

Solutions
_________

+ Upgrade PHP version to 8.4.
+ Turn the interface in an abstract class.
+ Turn the interface in a trait.


In previous PHP versions, this error message used to be :ref:`interfaces-may-only-include-hooked-properties`.
