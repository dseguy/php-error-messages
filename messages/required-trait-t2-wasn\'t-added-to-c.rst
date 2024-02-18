.. _required-trait-t2-wasn\'t-added-to-c:

Required Trait T2 wasn\'t added to C
------------------------------------
 
	.. meta::
		:description lang=en:
			Required Trait T2 wasn\'t added to C: When solving naming conflicts between traits, make sure that the mentionned traits are all part of the current class.

Description
___________
 
When solving naming conflicts between traits, make sure that the mentionned traits are all part of the current class. Here, the T2 is not mentionned in the C class. Note that traits may be included in a class over several use expressions, and their order is not important for this error. 

Example
_______

.. code-block:: php

   <?php
   trait T1 {
       function foo() {echo T1\n;}
   }
   trait T2 {
           function foo() {echo T2\n;}
   }
   class C {
       use T1 {
           T2::foo insteadof T1;
       }
   
   }
   ?>

Solutions
_________

+ Add the trait to the class.
+ Remove the alias/insteadof from the use.
