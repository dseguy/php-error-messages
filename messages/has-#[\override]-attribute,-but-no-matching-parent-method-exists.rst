has #[\Override] attribute, but no matching parent method exists
----------------------------------------------------------------
 
Description
___________
 
Override is a PHP attribute, that checks if a method is actually overriding the same method from a parent class. This means that there should be a method in one of the parent class, that have the same name.

When no such method is found, it signals that the method with the attribute is now orphaned. It should be renamed, to fit another method.


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
