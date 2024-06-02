.. _multiple-access-type-modifiers-are-not-allowed:

Multiple access type modifiers are not allowed
----------------------------------------------
 
	.. meta::
		:description lang=en:
			Multiple access type modifiers are not allowed: Only one visibility option is necessary to set the visibility of a property.

Description
___________
 
Only one visibility option is necessary to set the visibility of a property. Two is overkill or could be impossible, so PHP reports it.

This message applies to private, protected and public options.

There are similar messages for multiple readonly, or multiple static.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	private private static A $b;
   }
   
   ?>

Solutions
_________

+ Drop the extra visibility, and keep only one.

Related Error Messages
______________________

+ :ref:`multiple-static-modifiers-are-not-allowed`
+ :ref:`multiple-readonly-modifiers-are-not-allowed`
