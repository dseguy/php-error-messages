.. _static-property-x::\$y-cannot-be-readonly:

Static property x::$y cannot be readonly
----------------------------------------
 
	.. meta::
		:description:
			Static property x::$y cannot be readonly: Static properties cannot be made readonly.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Static property x::$y cannot be readonly
		:og:description: Static properties cannot be made readonly
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/static-property-x%3A%3A%24y-cannot-be-readonly.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static property x::$y cannot be readonly
	:twitter:description: Static property x::$y cannot be readonly: Static properties cannot be made readonly
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
Static properties cannot be made readonly. Only properties can be readonly.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	static readonly int $property;
   }
   
   ?>

Solutions
_________

+ Remove the readonly option on that property.
+ Make the property non-static .
