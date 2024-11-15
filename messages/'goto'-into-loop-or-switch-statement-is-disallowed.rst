.. _'goto'-into-loop-or-switch-statement-is-disallowed:

'goto' into loop or switch statement is disallowed
--------------------------------------------------
 
	.. meta::
		:description:
			'goto' into loop or switch statement is disallowed: It is not possible to put a label inside a loop (for, foreach, while, do.

		:og:type: article
		:og:title: &#039;goto&#039; into loop or switch statement is disallowed
		:og:description: It is not possible to put a label inside a loop (for, foreach, while, do
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%27goto%27-into-loop-or-switch-statement-is-disallowed.html

Description
___________
 
It is not possible to put a label inside a loop (for, foreach, while, do...while...) or a switch call. Such statement have to be initialized before execution, and the goto would cut short this crucial step.

On the other hand, it is possible to jump from a loop or a switch to outside that structure: then, it terminates it.

It is also possible to use a goto within a loop and a switch.

This is a compilation error: it is detected before execution.


Example
_______

.. code-block:: php

   <?php
   
   function foo() {
   	goto A;
   	
   	foreach($a as $b) {
   		A:
   	}
   }
   
   function bar() {
   	goto A;
   	
   	switch($a) {
   		case 1:
   			A:
   			
   			break;
   	}
   }
   
   ?>

Solutions
_________

+ Create a separate method to handle this specific case.
