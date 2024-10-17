.. _accessing-static-trait-property-%s::$%s-is-deprecated,-it-should-only-be-accessed-on-a-class-using-the-trait:

Accessing static trait property %s::$%s is deprecated, it should only be accessed on a class using the trait
------------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Accessing static trait property %s::$%s is deprecated, it should only be accessed on a class using the trait: Traits should not be used as standalone structure, but rather as a part of a class.

Description
___________
 
Traits should not be used as standalone structure, but rather as a part of a class. Even for class agnostic structures, such as constants or static properties, they should be accessed via any class that uses them.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
   	public static $property = 1;
   }
   
   echo T::$property;
   T::$property = 2;
   
   ?>

Solutions
_________

+ Find a class that use the trait, and then, access the static property from there.
+ Create a class that only use the trait, and use it. An anonymous class would do.
+ Turn the trait into a class.

Related Error Messages
______________________

+ :ref:`cannot-access-trait-constant-%s::%s-directly`
