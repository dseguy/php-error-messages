.. _cannot-use-the-abstract-modifier-on-a-property-hook:

Cannot use the abstract modifier on a property hook
---------------------------------------------------
 
	.. meta::
		:description:
			Cannot use the abstract modifier on a property hook: It is not possible to make individual property hooks abstract.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot use the abstract modifier on a property hook
		:og:description: It is not possible to make individual property hooks abstract
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-abstract-modifier-on-a-property-hook.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use the abstract modifier on a property hook
	:twitter:description: Cannot use the abstract modifier on a property hook: It is not possible to make individual property hooks abstract
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
It is not possible to make individual property hooks abstract. The keyword must be set at the property definition level, for all the hooks.

Example
_______

.. code-block:: php

   <?php
   
   abstract class X {
   	public $property {
   		abstract get;
   	}
   }
   
   ?>

Solutions
_________

+ Remove the abstract keyword, and put it on the property definition level.
