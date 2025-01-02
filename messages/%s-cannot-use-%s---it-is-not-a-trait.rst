.. _%s-cannot-use-%s---it-is-not-a-trait:

%s cannot use %s - it is not a trait
------------------------------------
 
	.. meta::
		:description:
			%s cannot use %s - it is not a trait: In a class definition, the use expression must only use traits.

		:og:type: article
		:og:title: %s cannot use %s - it is not a trait
		:og:description: In a class definition, the use expression must only use traits
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-cannot-use-%25s---it-is-not-a-trait.html

Description
___________
 
In a class definition, the use expression must only use traits. All other structures, such as class, interface, enum or else, are not allowed.

Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   class Y {
   	use x; 
   }
   ?>


Literal Examples
****************
+ y cannot use x - it is not a trait

Solutions
_________

+ Remove the use expression that uses the class.
+ Fix the name of the class, and use an existing trait.
