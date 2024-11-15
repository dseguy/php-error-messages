.. _cannot-use-empty-array-elements-in-arrays:

Cannot use empty array elements in arrays
-----------------------------------------
 
	.. meta::
		:description:
			Cannot use empty array elements in arrays: Arrays can only hold values.

		:og:type: article
		:og:title: Cannot use empty array elements in arrays
		:og:description: Arrays can only hold values
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-empty-array-elements-in-arrays.html

Description
___________
 
Arrays can only hold values. There is not meaning in an empty slots in an array. 

This problem happens at writing time, and cannot happen at execution time. 

This problem looks very similar to the usage of list() with empty slots: yet, list() is allowed to skip all but at least one element. With the modern short syntax of arrays and list, it might be tricky to distinguish them.

Example
_______

.. code-block:: php

   <?php
   
   $a = [,,,];
   $a = array(,,,);
   
   [,,$x] = [1,2,3];
   list(,,$x) = [1,2,3];
   
   ?>

Solutions
_________

+ Spot consecutive commas in an array() syntax.
