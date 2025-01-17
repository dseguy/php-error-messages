.. _jump-out-of-a-finally-block-is-disallowed:

jump out of a finally block is disallowed
-----------------------------------------
 
.. meta::
	:description:
		jump out of a finally block is disallowed: It is not possible to make a goto, when the label is in a finally block.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: jump out of a finally block is disallowed
	:og:description: It is not possible to make a goto, when the label is in a finally block
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/jump-out-of-a-finally-block-is-disallowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: jump out of a finally block is disallowed
	:twitter:description: jump out of a finally block is disallowed: It is not possible to make a goto, when the label is in a finally block
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

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
