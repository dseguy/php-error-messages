.. _readonly-property-%s::\$%s-cannot-have-default-value:

Readonly property %s::$%s cannot have default value
---------------------------------------------------
 
	.. meta::
		:description:
			Readonly property %s::$%s cannot have default value: A readonly property is expected to be set once, and only once, at execution time.

		:og:type: article
		:og:title: Readonly property %s::$%s cannot have default value
		:og:description: A readonly property is expected to be set once, and only once, at execution time
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/readonly-property-%25s%3A%3A%24%25s-cannot-have-default-value.html

Description
___________
 
A readonly property is expected to be set once, and only once, at execution time. Then, it is not changed anymore. 

A property, whose value is known at compilation time should probably be a constant.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public readonly int $i = 1;
   }
   
   ?>

Solutions
_________

+ Drop the readonly option.
+ Make the property a class constant.
