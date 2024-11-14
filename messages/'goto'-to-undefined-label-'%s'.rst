.. _'goto'-to-undefined-label-'%s':

'goto' to undefined label '%s'
------------------------------
 
	.. meta::
		:description lang=en:
			'goto' to undefined label '%s': This error is displayed when a goto command has no corresponding label in the method.

Description
___________
 
This error is displayed when a goto command has no corresponding label in the method. 

This is an compilation error: it is only reported before execution.

On the other hand, a label without a goto is not reported.


Example
_______

.. code-block:: php

   <?php
   
   function foo() {
   	goto A;
   	A:
   	goto B;
   	// Not such label as B:
   	
   	// A orphan label
   	C:
   }
   
   ?>


Literal Examples
****************
+ 'goto' to undefined label 'THEN'

Solutions
_________

+ Create the missing label.
+ Remove the goto call.
+ Rename the goto call.
