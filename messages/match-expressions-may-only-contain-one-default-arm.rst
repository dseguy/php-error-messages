.. _match-expressions-may-only-contain-one-default-arm:

Match expressions may only contain one default arm
--------------------------------------------------
 
	.. meta::
		:description lang=en:
			Match expressions may only contain one default arm: match() expression may have one ``default`` entry, but no more than that.

Description
___________
 
match() expression may have one ``default`` entry, but no more than that. It is the same than for switch()

Example
_______

.. code-block:: php

   <?php
   
   $a = match($b) {
   	default => 1;
   	default => 2;
   }
   
   ?>

Solutions
_________

+ Remove one of the default arm.
+ Remove all the default arms.

Related Error Messages
______________________

+ :ref:`switch-statements-may-only-contain-one-default-clause`
