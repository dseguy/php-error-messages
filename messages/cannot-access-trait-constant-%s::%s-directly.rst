.. _cannot-access-trait-constant-%s::%s-directly:

Cannot access trait constant %s::%s directly
--------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot access trait constant %s::%s directly: Traits cannot be used indepently from a host class.

Description
___________
 
Traits cannot be used indepently from a host class. They must be used inside a class, with the ``use`` keyword. 

It is also not possible to call a method or a property on a trait.

Trait constants were introduced after direct access to trait features was banned, so there was no time where accessing a trait constant was possible, unlike trait properties or methods.


Example
_______

.. code-block:: php

   <?php
   
   trait T {
   	public static const T = 1;
   }
   
   echo T::T;
   
   ?>

Solutions
_________

+ Use the trait in a class and access its features.
+ Convert the trait into a class and access its features.

Related Error Messages
______________________

+ :ref:`accessing-static-trait-property-%s::$%s-is-deprecated`
+ :ref:`calling-static-trait-method-%s::%s-is-deprecated`
