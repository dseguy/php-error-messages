.. _break-operator-accepts-only-positive-integers:

break operator accepts only positive integers
---------------------------------------------
 
	.. meta::
		:description lang=en:
			break operator accepts only positive integers: break indicates the number of nested loop to break from.

Description
___________
 
break indicates the number of nested loop to break from. The minimum is 1. 0 would be a no operation, and shall be skipped. Negative numbers or decimals make no sense.

Example
_______

.. code-block:: php

   <?php
   
   $a = [];
   foreach($a as $b) {
       break 0;
       
   }

Solutions
_________

+ Remove the continue command.
+ Remove the 0.

Related Error Messages
______________________

+ :ref:`continue-operator-accepts-only-positive-integers`
