.. _class-constant-%s::%s-cannot-have-type-%s:

Class constant %s::%s cannot have type %s
-----------------------------------------
 
	.. meta::
		:description lang=en:
			Class constant %s::%s cannot have type %s: Some native PHP types are not allowed with a class constant.

Description
___________
 
Some native PHP types are not allowed with a class constant. This is the case of void, never and callable. Any mention of them, alone or in a compsed type generates this error. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	const callable|int A = 1;
   }
   
   ?>

Solutions
_________

+ Remove any illegal type from the definition of the constant.
+ Remove all types from the definition of the constant.

Related Error Messages
______________________

+ :ref:`property-%s::$%s-cannot-have-type-%s`
