.. _jump-into-a-finally-block-is-disallowed:

jump into a finally block is disallowed
---------------------------------------
 
	.. meta::
		:description:
			jump into a finally block is disallowed: It is not possible to make a goto, when the label is in a finally block.

		:og:type: article
		:og:title: jump into a finally block is disallowed
		:og:description: It is not possible to make a goto, when the label is in a finally block
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/jump-into-a-finally-block-is-disallowed.html

Description
___________
 
It is not possible to make a goto, when the label is in a finally block. It is OK to do the goto call when both goto and label are in the finally block, though.

Example
_______

.. code-block:: php

   <?php
   
   goto theLabel;
   
   try {}
   catch (Exception) {}
   finally {
   	theLabel: 
   		$a++;
   }
   
   ?>

Solutions
_________

+ Replace the goto call with something else.
+ Move the goto in the finally block.
+ Move the label out of the finally block.

Related Error Messages
______________________

+ :ref:`jump-out-of-a-finally-block-is-disallowed`
