.. _fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed:

Fetching properties on non-enums in constant expressions is not allowed
-----------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Fetching properties on non-enums in constant expressions is not allowed: Constant expressions are expressions that build the value of a constant.

Description
___________
 
Constant expressions are expressions that build the value of a constant. A subset of the features of PHP are available in these expressions. 

In particular, objects are allowed, but it is not possible to fetch properties nor call methods. In fact, properties are allowed, but on a specific type of object: enumeration cases.


Example
_______

.. code-block:: php

   <?php
   
   class Y {
   	public $y = 1;
   }
   
   const Y = new Y();
   
   enum Z : string {
   	case z = 'foo';
   }
   
   class x {
   	const XZ = Z::z->value;
   	const X = Y->y;
   }
   
   // OK: foo
   echo x::XZ;
   
   //Fetching properties on non-enums in constant expressions is not allowed
   echo x::X;
   
   ?>

Solutions
_________

+ Do not use properties in constant expressions.

Related Error Messages
______________________

+ :ref:`constant-expression-contains-invalid-operations`
