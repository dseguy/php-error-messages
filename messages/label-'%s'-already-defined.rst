.. _label-'%s'-already-defined:

Label '%s' already defined
--------------------------
 
	.. meta::
		:description lang=en:
			Label '%s' already defined: A goto label has been defined twice or more.

Description
___________
 
A goto label has been defined twice or more. This is not allowed, as the ``goto`` call won't be able to decide which label to reach. 

Note that a single unused label is allowed, and is considered dead code. 

Multiple identical labels are possible, in different method contexts.


Example
_______

.. code-block:: php

   <?php
   
   function foo() {
   	C:
   	C:
   	
   	// valid code, though dead and unused
   	D: 
   }
   
   function bar() {
   	// valid code, though dead and unused
   	D: 
   }
   
   ?>


Literal Examples
****************
+ Label 'C' already defined

Solutions
_________

+ Remove duplicate label.
+ Rename duplicate label.
+ Move the duplicate label to a distinct method.
