.. _could-not-check-compatibility-between-%s-and-%s,-because-class-%s-is-not-available:

Could not check compatibility between %s and %s, because class %s is not available
----------------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Could not check compatibility between %s and %s, because class %s is not available: This error message signals that PHP could not find all the needed classes and interfaces to reach a conclusion about the compatibility of ``X``, compared to ``W``.

Description
___________
 
This error message signals that PHP could not find all the needed classes and interfaces to reach a conclusion about the compatibility of ``X``, compared to ``W``. 

PHP checks in all the classes and interfaces whose definitions are already known, and, eventually, calls autoload to get the missing classes. When all avenues are exhausted, PHP yield this error. 

In fact, if checking compatibility fails, the code will not run later anyway.

Example
_______

.. code-block:: php

   <?php
   
   class W {
       function foo() : W { }
   }
   
   class X extends W {
       function foo() : X { }
   }
   
   ?>

Solutions
_________

+ Use existing classes or interfaces as type.
+ Fix typos in type names.
+ Add any missing class or interface.
