.. _required-trait-%s-wasn\'t-added-to-%s:

Required Trait %s wasn't added to %s
------------------------------------
 
	.. meta::
		:description lang=en:
			Required Trait %s wasn't added to %s: This error happens during name conflict resolution for traits.

Description
___________
 
This error happens during name conflict resolution for traits. It means that one of the mentionned trait is not ``use`` in the code, and cannot be replaced or replacing another method. In the example below, the trait T2 is mentionned, but is not in the ``use`` command.

Example
_______

.. code-block:: php

   <?php
   trait T1 {
       function foo() {echo "T1\n";}
   }
   trait T2 {
           function foo() {echo "T2\n";}
   }
   class C {
       use T1 {
           T2::foo insteadof T1;
       }
   }
   ?>


Literal Examples
****************
+ Required Trait T2 wasn't added to C

Solutions
_________

+ Add the missing trait to the class.
+ Remove the extra name resolution from the class.
