.. _continue-operator-accepts-only-positive-integers:

continue operator accepts only positive integers
------------------------------------------------
 
	.. meta::
		:description lang=en:
			continue operator accepts only positive integers: continue indicates the number of nested loop to continue in.

Description
___________
 
continue indicates the number of nested loop to continue in. The minimum is 1. 0 would be a no operation, and shall be skipped. Negative numbers or decimals make no sense.

Example
_______

.. code-block:: php

   <?php
   
   $a = [];
   foreach($a as $b) {
       continue 0;
       
   }

Solutions
_________

+ Remove the continue command.
+ Remove the 0.

Related Error Messages
______________________

+ :ref:`break-operator-accepts-only-positive-integers`
