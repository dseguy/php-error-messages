.. _readonly-property-%s::\$%s-cannot-have-default-value:

Readonly property %s::$%s cannot have default value
---------------------------------------------------
 
	.. meta::
		:description lang=en:
			Readonly property %s::$%s cannot have default value: A readonly property is expected to be set once, and only once, at execution time.

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
