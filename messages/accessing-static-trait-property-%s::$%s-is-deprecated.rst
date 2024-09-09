.. _accessing-static-trait-property-%s::$%s-is-deprecated:

Accessing static trait property %s::$%s is deprecated
-----------------------------------------------------
 
	.. meta::
		:description lang=en:
			Accessing static trait property %s::$%s is deprecated: Traits cannot be used indepently from a host class.

Description
___________
 
Traits cannot be used indepently from a host class. They must be used inside a class, with the ``use`` keyword. 

Until PHP 8.1, it was possible to call traits without a host class. Since 8.1, writing or reading properties in a trait is forbidden.

It is also not possible to call a method or a constant on a trait.


Example
_______

.. code-block:: php

   <?php
   
   trait T {
   	public static $t = 1;
   }
   
   echo T::$t;
   
   T::$t = 2;
   
   ?>

Solutions
_________

+ Use the trait in a class and access its features.
+ Convert the trait into a class and access its features.

Related Error Messages
______________________

+ :ref:`calling-static-trait-method-%s::%s-is-deprecated`
+ :ref:`cannot-access-trait-constant-%s::%s-directly`
