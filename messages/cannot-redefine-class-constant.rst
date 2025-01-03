.. _cannot-redefine-class-constant:

Cannot redefine class constant
------------------------------
 
	.. meta::
		:description:
			Cannot redefine class constant: It is only allowed to defined a constant once per class.

		:og:type: article
		:og:title: Cannot redefine class constant
		:og:description: It is only allowed to defined a constant once per class
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redefine-class-constant.html

Description
___________
 
It is only allowed to defined a constant once per class. 

A constant with the same name may be defined in a parent or child class, or even in a trait: there are rules that allow PHP to select one of them, whenever there is a possible name conflict. 

At the class, interface, trait level, the constants must all be distinct. 

At the enumeration level, the naming conflict may arise between a case and a const: the error message is then the same.

This error applies to class constants, and there is a different error for global constants.


Example
_______

.. code-block:: php

   <?php
   
   class x {
   	const A = 1, A = 1;
   }
   
   enum e {
   	case B;
   
   	const B = 1;
   }
   
   ?>

Solutions
_________

+ Remove one of the constant.
+ Rename one of the constant.
+ Move one of the constant to a parent, trait or interface.

Related Error Messages
______________________

+ :ref:`constant-%s-already-defined`
