.. _indirect-modification-of-overloaded-property-%s::\$%s-has-no-effect:

Indirect modification of overloaded property %s::$%s has no effect
------------------------------------------------------------------
 
.. meta::
	:description:
		Indirect modification of overloaded property %s::$%s has no effect: The variable $object is an object.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Indirect modification of overloaded property %s::$%s has no effect
		:og:description: The variable $object is an object
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/indirect-modification-of-overloaded-property-%25s%3A%3A%24%25s-has-no-effect.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Indirect modification of overloaded property %s::$%s has no effect
		:twitter:description: Indirect modification of overloaded property %s::$%s has no effect: The variable $object is an object
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

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


Literal Examples
****************
+ Indirect modification of overloaded property OneObject::$something has no effect

Solutions
_________

+ Use an actual data container to represent a property.

Related Error Messages
______________________

+ :ref:`indirect-modification-of-overloaded-element-of-%s-has-no-effect`
