.. _x::foo()-has-#[\override]-attribute,-but-no-matching-parent-method-exists:

X::foo() has #[\Override] attribute, but no matching parent method exists
-------------------------------------------------------------------------
 
	.. meta::
		:description:
			X::foo() has #[\Override] attribute, but no matching parent method exists: This error message has two sources: it happens, at compilation time, when the class has no parent, yet has a method with Override attribute.

		:og:type: article
		:og:title: X::foo() has #[\Override] attribute, but no matching parent method exists
		:og:description: This error message has two sources: it happens, at compilation time, when the class has no parent, yet has a method with Override attribute
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/x%3A%3Afoo%28%29-has-%23%5B%5Coverride%5D-attribute%2C-but-no-matching-parent-method-exists.html

Description
___________
 
This error message has two sources: it happens, at compilation time, when the class has no parent, yet has a method with Override attribute. Since the attribute implies that the method is overriding a parent's method, this is not possible.

The second cause is a method that has no counterpart in the parents' classes: there, the attribute plays its actual role.

This error happens when the ``Override`` attribute was used in PHP version 8.2, or older, and then, the code was moved to PHP 8.3. With the last version change, the attribute became active, and the code is now actually checked.


Example
_______

.. code-block:: php

   <?php
   
   class X {
   	#[Override]
   	function foo();
   }
   
   class Y extends X {
   	#[Override]
   	function goo();
   }
   
   ?>

Solutions
_________

+ Remove the Override attribute.
+ Add a method with the same name to the parent class.
+ Rename the current method to one that is present in the parent.
+ Stay on PHP 8.2.
