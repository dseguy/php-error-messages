.. _unterminated-comment-starting-line-%d:

Unterminated comment starting line %d
-------------------------------------
 
	.. meta::
		:description lang=en:
			Unterminated comment starting line %d: The multi-line comments with ``/* .

Description
___________
 
The multi-line comments with ``/* ... */`` and ``/** ... */`` require a closing tag. When that closing tag is missing, the error is emitted.

This problem does not occur with the single line comment ``//``, as this comment only ends with the end of the line. 



Example
_______

.. code-block:: php

   <?php
   
   /*
   comment
   
       Missing final / below
   *        
   
   ?>

Solutions
_________

+ Check if the closing tag is complete, with ``*`` and ``/``.
+ Check if the closing tag is not missing entirely.
