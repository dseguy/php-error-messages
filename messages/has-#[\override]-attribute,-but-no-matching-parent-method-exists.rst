.. _has-#[\override]-attribute,-but-no-matching-parent-method-exists:

has #[\Override] attribute, but no matching parent method exists
----------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			has #[\Override] attribute, but no matching parent method exists: Override is a PHP attribute, that checks if a method is actually overriding the same method from a parent class.

Description
___________
 
Override is a PHP attribute, that checks if a method is actually overriding the same method from a parent class. This means that there should be a method in one of the parent class, that have the same name.

When no such method is found, it signals that the method with the attribute is now orphaned. It should be renamed, to fit another method.

The error is emitted when a method has the Override but no such method exists in the parent; it is also emitted when Override is used in a class or an interface that has no parent. No error is emitted on traits or enums. 

This error is a compile time error, when PHP can solve it at compile time: this means both the class with the Override attribute, and the parent class is available at compile time. It is also an execution time error, when the Override is set in a method in a trait.


Example
_______

.. code-block:: php

   <?php
   
   #[Attribute]
   class x {
   }
   
   class y extends x {
   	#[Override]
   	function foo() {}
   }
   ?>

Solutions
_________

+ Remove the Override attribute.
+ Rename the current method with the name of a method in the parents.
+ Remove the method.
+ Rename one of the parent method to use the name of the current method.
