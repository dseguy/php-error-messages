.. _cannot-use-the-abstract-modifier-on-a-property:

Cannot use the abstract modifier on a property
----------------------------------------------
 
	.. meta::
		:description:
			Cannot use the abstract modifier on a property: Properties cannot be abstract, as they are always available in the class where they are defined.

		:og:type: article
		:og:title: Cannot use the abstract modifier on a property
		:og:description: Properties cannot be abstract, as they are always available in the class where they are defined
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-abstract-modifier-on-a-property.html

Description
___________
 
Properties cannot be abstract, as they are always available in the class where they are defined. 

This will change in PHP 8.4, with property hooks and abstract hooks. Until then, abstract properties are not valid.

Example
_______

.. code-block:: php

   <?php
   
   abstract class X {
       public abstract string $x;
   }
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.4, and use hooked properties.
+ Remove the abstract keyword.
+ Use magic methods ``__get`` and ``__set`` to define a custom alternative property.


In more recent PHP versions, this error message is now :ref:`only-hooked-properties-may-be-declared-abstract`.
