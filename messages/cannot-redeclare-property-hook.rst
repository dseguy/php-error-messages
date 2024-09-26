.. _cannot-redeclare-property-hook:

Cannot redeclare property hook
------------------------------
 
	.. meta::
		:description lang=en:
			Cannot redeclare property hook: Property hooks must be all distinct, and there can only be two.

Description
___________
 
Property hooks must be all distinct, and there can only be two. In that case, it is ``get`` and ``set``. Property hooks are case insensitive, so ``get`` and ``GET`` are the same. 

They also differ one from the other by one letter, so review is important.


Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public string $property {
           set => $this->property . _1;
   
           SET {
               $this->property = $value;
           }
       }
   }
   ?>

Solutions
_________

+ Make sure that both hooks are needed.
+ Remove any third hook: there can only be two, at most.
+ Check case of the hooks name.
