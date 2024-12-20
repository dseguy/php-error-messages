.. _must-contain-at-least-one-element:

must contain at least one element
---------------------------------
 
	.. meta::
		:description:
			must contain at least one element: min() and max() only work on arrays that contains at least one element.

		:og:type: article
		:og:title: must contain at least one element
		:og:description: min() and max() only work on arrays that contains at least one element
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-contain-at-least-one-element.html

Description
___________
 
min() and max() only work on arrays that contains at least one element. The object here is to avoid the confusion of the ``null`` value that may be the result of the operation, and the ``null`` that PHP used to return when there was nothing to process in the array.

Example
_______

.. code-block:: php

   <?php
   
   echo min([]);
   echo max([]);
   
   ?>

Solutions
_________

+ Check for empty() before using the min() or max() functions.
