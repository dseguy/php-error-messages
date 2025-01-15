.. _trait-"%s"-not-found:

Trait "%s" not found
--------------------
 
	.. meta::
		:description:
			Trait "%s" not found: This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class.

		:og:type: article
		:og:title: Trait &quot;%s&quot; not found
		:og:description: This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/trait-%22%25s%22-not-found.html

Description
___________
 
This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class.

PHP takes into consideration all the traits, even if they are added later than the conflict class.


Example
_______

.. code-block:: php

   <?php
   
   class X  { 
       // C is not a used trait
       use A, B { C::d insteadof E;}
   
       // E is a used trait, even if is not in the use above.
       use E;
   }
   ?>


Literal Examples
****************
+ Trait "E" not found

Solutions
_________

+ Add the missing trait.
+ Remove the missing trait and its conflict resolution.
