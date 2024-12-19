.. _argument-#1-(\$value)-must-contain-at-least-one-element:

Argument #1 ($value) must contain at least one element
------------------------------------------------------
 
	.. meta::
		:description:
			Argument #1 ($value) must contain at least one element: max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL.

		:og:type: article
		:og:title: Argument #1 ($value) must contain at least one element
		:og:description: max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/argument-%231-%28%24value%29-must-contain-at-least-one-element.html

Description
___________
 
max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL.

Example
_______

.. code-block:: php

   <?php
   
   max([]);
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Check if the array has at least one argument before calling max() or min().
+ Add an element to the array before callign max(), and use it as a canary.
