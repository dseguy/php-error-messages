.. _property-%s::\$%s-cannot-have-type-%s:

Property %s::$%s cannot have type %s
------------------------------------
 
	.. meta::
		:description lang=en:
			Property %s::$%s cannot have type %s: Some native PHP types are not allowed with a property.

Description
___________
 
Some native PHP types are not allowed with a property. This is the case of void, never and callable. Any mention of them, alone or in a compsed type generates this error. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public callable|int $p = 1;
   }
   
   ?>

Solutions
_________

+ Remove any illegal type from the definition of the property.
+ Remove all types from the definition of the property.

Related Error Messages
______________________

+ :ref:`class-constant-%s::%s-cannot-have-type-%s`
