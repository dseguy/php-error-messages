.. _continue-operator-accepts-only-positive-integers:

continue operator accepts only positive integers
------------------------------------------------
 
	.. meta::
		:description:
			continue operator accepts only positive integers: continue indicates the number of nested loop to continue in.

		:og:type: article
		:og:title: continue operator accepts only positive integers
		:og:description: continue indicates the number of nested loop to continue in
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/continue-operator-accepts-only-positive-integers.html

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
