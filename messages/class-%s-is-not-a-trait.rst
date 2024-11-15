.. _class-%s-is-not-a-trait:

Class %s is not a trait, Only traits may be used in 'as' and 'insteadof' statements
-----------------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Class %s is not a trait, Only traits may be used in 'as' and 'insteadof' statements: It is not possible to use a class name in a use block: the block only uses traits information.

Description
___________
 
It is not possible to use a class name in a use block: the block only uses traits information. 

The class method have priority over the trait methods, so there is no need to explicitly solve such conflict. On the other hand, when the trait has to have priority, it has to be specified as such, using a trait name. 

Any method defined in a parent class is assimilated to the current class, and has priority. 


Example
_______

.. code-block:: php

   <?php
   
   class x {}
   
   trait t {}
   
   class y extends x {
   	use t{ x::foo instead of t; }; 
   }
   ?>

Solutions
_________

+ Remove the use block entry that mentions the class.
+ Fix the name of the class, with the name of a trait.
