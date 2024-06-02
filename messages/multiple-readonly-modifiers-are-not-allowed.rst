.. _multiple-readonly-modifiers-are-not-allowed:

Multiple readonly modifiers are not allowed
-------------------------------------------
 
	.. meta::
		:description lang=en:
			Multiple readonly modifiers are not allowed: Only one readonly option is necessary to make a property read-only.

Description
___________
 
Only one readonly option is necessary to make a property read-only. Two is overkill, and not needed, so PHP reports it.

There are similar messages for multiple visibility, or multiple static.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	private readonly readonly A $b;
   }
   
   readonly readonly class y {
   }
   
   ?>

Solutions
_________

+ Drop the extra readonly, and keep only one.
+ Drop all the readonly options.

Related Error Messages
______________________

+ :ref:`multiple-static-modifiers-are-not-allowed`
+ :ref:`multiple-access-type-modifiers-are-not-allowed`
