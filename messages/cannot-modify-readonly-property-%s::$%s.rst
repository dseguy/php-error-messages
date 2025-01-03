.. _cannot-modify-readonly-property-%s::\$%s:

Cannot modify readonly property %s::$%s
---------------------------------------
 
	.. meta::
		:description:
			Cannot modify readonly property %s::$%s: readonly properties can only be set once.

		:og:type: article
		:og:title: Cannot modify readonly property %s::$%s
		:og:description: readonly properties can only be set once
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-modify-readonly-property-%25s%3A%3A%24%25s.html

Description
___________
 
readonly properties can only be set once. 

When such property is set in the constructor, there should not be another assignation of this property in another method: it would fail. 

When the property is set in another method, then, such method shall only be called once. 

They also should be set from their original class (or its children) and not from the public space. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public readonly int $property;
   	public int $other;
   }
   
   $x = new x;
   $x->other = 3;
   $x->property = 5;
   
   ?>


Literal Examples
****************
+ Cannot modify readonly property x::$property

Solutions
_________

+ Drop the readonly option.
+ Create an accessor to set the property in the correct context.
