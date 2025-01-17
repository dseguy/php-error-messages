.. _argument-#1-(\$value)-must-contain-at-least-one-element:

Argument #1 ($value) must contain at least one element
------------------------------------------------------
 
	.. meta::
		:description:
			Argument #1 ($value) must contain at least one element: max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Argument #1 ($value) must contain at least one element
		:og:description: max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/argument-%231-%28%24value%29-must-contain-at-least-one-element.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Argument #1 ($value) must contain at least one element
	:twitter:description: Argument #1 ($value) must contain at least one element: max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL.

Example
_______

.. code-block:: php

   <?php
   
   max([]);
   
   ?>

Solutions
_________

+ Check if the array has at least one argument before calling max() or min().
+ Add an element to the array before callign max(), and use it as a canary.
