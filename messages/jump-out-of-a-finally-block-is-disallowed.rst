.. _jump-out-of-a-finally-block-is-disallowed:

jump out of a finally block is disallowed
-----------------------------------------
 
	.. meta::
		:description lang=en:
			jump out of a finally block is disallowed: It is not possible to make a goto, when the label is in a finally block.

Description
___________
 
It is not possible to make a goto, when the label is in a finally block. It is OK to do the goto call when both goto and label are in the finally block, though.

Example
_______

.. code-block:: php

   <?php
   
   
   try {}
   catch (Exception) {}
   finally {
   	goto theLabel;
   }
   
   	theLabel: 
   		$a++;
   
   ?>

Solutions
_________

+ Replace the goto call with something else.
+ Move the goto after the finally block.
+ Move the label in the finally block.

Related Error Messages
______________________

+ :ref:`jump-into-a-finally-block-is-disallowed`
