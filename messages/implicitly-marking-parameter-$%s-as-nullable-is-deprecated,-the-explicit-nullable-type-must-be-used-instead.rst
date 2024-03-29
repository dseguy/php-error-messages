.. _implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead:

Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead
-----------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead: Until PHP 8.

Description
___________
 
Until PHP 8.4, it is possible to use a default value of null, on a parameter that is not nullable. This special situation makes the parameter nullable: it may be omitted, or explicitely passed as null. This is a hidden type, as the null type is not explicit, yet it is fully usable.

In PHP 8.4, this is not possible anymore. For consistency reasons, the type must be explicitly displayed. Until then, it was silent. 


Example
_______

.. code-block:: php

   <?php
   
   function foo(string $s = null) {}
   
   ?>

Solutions
_________

+ Add ``?`` to the type.
+ Add ``null|`` to the type.
