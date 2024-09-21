.. _%s-cannot-use-%s---it-is-not-a-trait:

%s cannot use %s - it is not a trait
------------------------------------
 
	.. meta::
		:description lang=en:
			%s cannot use %s - it is not a trait: In a class definition, the use expression must only use traits.

Description
___________
 
In a class definition, the use expression must only use traits. All other structures, such as class, interface, enum or else, are not allowed.

Example
_______

.. code-block:: php

   <?php
   
   class x {}
   
   class y {
   	use x; 
   }
   ?>

Solutions
_________

+ Remove the use expression that uses the class.
+ Fix the name of the class, and use an existing trait.
