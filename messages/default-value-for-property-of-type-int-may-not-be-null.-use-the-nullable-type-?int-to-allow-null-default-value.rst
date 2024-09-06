.. _default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value:

Default value for property of type int may not be null. Use the nullable type ?int to allow null default value
--------------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Default value for property of type int may not be null. Use the nullable type ?int to allow null default value: When an argument is typed, and has a null default value, PHP makes it automagically nullable.

Description
___________
 
When an argument is typed, and has a null default value, PHP makes it automagically nullable. That is not the case for properties, which yields this error.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	private int $i = null;
   }
   
   function foo(int $i = null) { }
   
   ?>

Solutions
_________

+ Add the nullable type to the type definition.
+ Use another default value, within the current type domain.

Related Error Messages
______________________

+ :ref:`implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead`
