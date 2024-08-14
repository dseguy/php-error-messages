.. _cannot-instantiate-enum-%s:

Cannot instantiate enum %s
--------------------------
 
	.. meta::
		:description lang=en:
			Cannot instantiate enum %s: Enumeration cannot be instantiated directly.

Description
___________
 
Enumeration cannot be instantiated directly. 

An enumeration object is created automatically when reading one of its case.

Example
_______

.. code-block:: php

   <?php
   
   enum e {
   	case A;
   }
   
   //Cannot instantiate enum e
   new e();
   
   // e
   print get_class(e::A);
   
   ?>

Solutions
_________

+ Use one of the enumeration case.
