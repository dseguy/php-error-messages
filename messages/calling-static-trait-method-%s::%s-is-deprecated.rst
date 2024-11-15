.. _calling-static-trait-method-%s::%s-is-deprecated:

Calling static trait method %s::%s is deprecated
------------------------------------------------
 
	.. meta::
		:description lang=en:
			Calling static trait method %s::%s is deprecated: Traits cannot be used independently from a host class.

Description
___________
 
Traits cannot be used independently from a host class. They must be used inside a class, with the ``use`` keyword. 

Until PHP 8.1, it was possible to call traits without a host class. Since 8.1, calling a trait method is deprecated.

It is also not possible to call a method or a property on a trait.


Example
_______

.. code-block:: php

   <?php
   
   trait T {
   	public static function foo() { echo __METHOD__; };
   }
   
   t::foo();
   
   ?>


Literal Examples
****************
+ Calling static trait method T::foo is deprecated

Solutions
_________

+ Use the trait in a class and access its features.
+ Convert the trait into a class and access its features.

Related Error Messages
______________________

+ :ref:`accessing-static-trait-property-%s::$%s-is-deprecated`
+ :ref:`cannot-access-trait-constant-%s::%s-directly`
