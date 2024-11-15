.. _cannot-use-the-abstract-modifier-on-a-property-hook:

Cannot use the abstract modifier on a property hook
---------------------------------------------------
 
	.. meta::
		:description:
			Cannot use the abstract modifier on a property hook: It is not possible to make individual property hooks abstract.

		:og:type: article
		:og:title: Cannot use the abstract modifier on a property hook
		:og:description: It is not possible to make individual property hooks abstract
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-abstract-modifier-on-a-property-hook.html

Description
___________
 
It is not possible to make individual property hooks abstract. The keyword must be set at the property definition level, for all the hooks.

Example
_______

.. code-block:: php

   <?php
   
   abstract class x {
   	public $p {
   		abstract get;
   	}
   }
   
   ?>

Solutions
_________

+ Remove the abstract keyword, and put it on the property definition level.
