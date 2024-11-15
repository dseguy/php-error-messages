.. _unhandled-match-case-%s:

Unhandled match case %s
-----------------------
 
	.. meta::
		:description lang=en:
			Unhandled match case %s: The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn't have a default entry.

Description
___________
 
The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn't have a default entry. That default entry would act as a catch-all entry, and would process unknown values.

Example
_______

.. code-block:: php

   <?php
   
   match(3) {
       1, 2 => 'foo',
   };
   
   ?>


Literal Examples
****************
+ Unhandled match case 3

Solutions
_________

+ Add the missing entry in the list.
+ Add the missing default in the match.
+ Weed out the value before submitting it to the match().
