.. _cannot-use-[]-for-reading:

Cannot use [] for reading
-------------------------
 
	.. meta::
		:description:
			Cannot use [] for reading: The append operator ``[]`` is a write operator: it alters the underlying variable.

		:og:type: article
		:og:title: Cannot use [] for reading
		:og:description: The append operator ``[]`` is a write operator: it alters the underlying variable
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%5B%5D-for-reading.html

Description
___________
 
The append operator ``[]`` is a write operator: it alters the underlying variable. It cannot be used for reading, as it doesn't produce a value. Hence, it is not possible to use the append operator as an argument, or with a short assignment operator.

Example
_______

.. code-block:: php

   <?php
   
   // += needs a value to increment, which [] cannot provide
   $a[] += 2; 
   
   // When foo() is called, the value of the arguments is transmitted to the function.
   // Here, $a[] has no value.
   foo($a[]); 
   
   ?>

Solutions
_________

+ Only use [] in writing context.
