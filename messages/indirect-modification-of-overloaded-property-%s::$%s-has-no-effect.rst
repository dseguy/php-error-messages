.. _indirect-modification-of-overloaded-property-%s::\$%s-has-no-effect:

Indirect modification of overloaded property %s::$%s has no effect
------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Indirect modification of overloaded property %s::$%s has no effect: The variable $object is an object.

Description
___________
 
The variable $object is an object. Since it implements the __get magic method, any property is available. 

While the syntax makes $object->something looks like a actual property and an array, not all operations are available. It is possible to get any property's value, or to give it a new value; but it is not possible to use the append operator : this is not supported by the magic method.

There are different variations of that situation : for example, an increment or decrement on the value on a property is not possible either. 

There is no call that will relay to the magic method that this property is being appended or incremented. 


Example
_______

.. code-block:: php

   <?php
   class OneObject {
       function __get($var) { }
   }
   $object = new OneObject;
   $object->something[] = 'bar';
   ?>

Solutions
_________

+ Use an actual data container to represent a property.

Related Error Messages
______________________

+ :ref:`indirect-modification-of-overloaded-element-of-%s-has-no-effect`
