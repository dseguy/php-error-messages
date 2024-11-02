.. _access-level-to-%s::%s-must-be-%s-(as-in-%s-%s)%s:

Access level to %s::%s must be %s (as in %s %s)%s
-------------------------------------------------
 
	.. meta::
		:description lang=en:
			Access level to %s::%s must be %s (as in %s %s)%s: This error is emitted when a class constant is given more restrictive visibility than in the interface.

Description
___________
 
This error is emitted when a class constant is given more restrictive visibility than in the interface. 

Anything in an interface is public, and so does any re-declaration in the host class.


Example
_______

.. code-block:: php

   <?php
   
   interface i {
       public const A   = 'public';
   }
   
   class x implements i {
       private const A   = 'public';
   }
   
   ?>

Solutions
_________

+ Remove the constant from the interface.
+ Remove the constant from the class.
