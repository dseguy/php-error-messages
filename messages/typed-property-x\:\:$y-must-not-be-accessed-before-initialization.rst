.. _typed-property-x\:\:$y-must-not-be-accessed-before-initialization:

Typed property x\:\:$y must not be accessed before initialization
-----------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Typed property x\:\:$y must not be accessed before initialization: When a property is typed, it starts its existence in an 'undefined' state, which cannot be compared to anything else.

Description
___________
 
When a property is typed, it starts its existence in an 'undefined' state, which cannot be compared to anything else. The property must be assigned before a read access can happen. The same applies to both property types, static or not.

Example
_______

.. code-block:: php

   <?php
   
   class x {
       public int $y;
   }
   
   var_dump((new x)->y);
   
   ?>

Solutions
_________

+ Ensure that the property receives a value before reading it.
+ Use empty() or isset() to check if the property has been set, before reading.

Related Error Messages
______________________

+ :ref:`typed-static-property-x::$y-must-not-be-accessed-before-initialization`
+ :ref:`typed-property-%s::$%s-must-not-be-accessed-before-initialization`
+ :ref:`attempt-to-unset-static-property-a::$x`

See Also
________

+ `Typed property must not be accessed before initialization <https://madewithlove.com/blog/typed-property-must-not-be-accessed-before-initialization/>`_
