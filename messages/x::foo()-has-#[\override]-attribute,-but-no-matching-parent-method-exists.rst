.. _x::foo()-has-#[\override]-attribute,-but-no-matching-parent-method-exists:

X::foo() has #[\Override] attribute, but no matching parent method exists
-------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			X::foo() has #[\Override] attribute, but no matching parent method exists: This error message has two sources: it happens, at compilation time, when the class has no parent, yet has a method with Override attribute.

Description
___________
 
This error message has two sources: it happens, at compilation time, when the class has no parent, yet has a method with Override attribute. Since the attribute implies that the method is overriding a parent's method, this is not possible.\nThe second cause is a method that has no counterpart in the parents' classes: there, the attribute plays its actual role.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	#[Override]
   	function foo();
   }
   
   class y extends x {
   	#[Override]
   	function goo();
   }
   
   ?>

Solutions
_________

+ Remove the Override attribute.
+ Add a method with the same name to the parent class.
+ Rename the current method to one that is present in the parent.
