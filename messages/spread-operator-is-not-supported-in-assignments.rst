.. _spread-operator-is-not-supported-in-assignments:

Spread operator is not supported in assignments
-----------------------------------------------
 
	.. meta::
		:description:
			Spread operator is not supported in assignments: The spread operator cannot be used with the list() operator.

		:og:type: article
		:og:title: Spread operator is not supported in assignments
		:og:description: The spread operator cannot be used with the list() operator
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/spread-operator-is-not-supported-in-assignments.html

Description
___________
 
The spread operator cannot be used with the list() operator. It may be used to spread an array into arguments, but it is not possible to do the same when assigning elements inside an array.

Example
_______

.. code-block:: php

   <?php
   
   [...$x] = [1, 2, 3];
   
   list(...$x) = array(1, 2, 3);
   
   [$x[0], , $x['a']] = [1, 2, 3];
   
   ?>

Solutions
_________

+ Write the full list of targets in the list operator: it might be array elements, and the array nor the elements needs to pre-exists.
