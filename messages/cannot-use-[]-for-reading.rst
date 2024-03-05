.. _cannot-use-[]-for-reading:

Cannot use [] for reading
-------------------------
 
	.. meta::
		:description lang=en:
			Cannot use [] for reading: The append operator ``[]`` is a write operator: it alters the underlying variable.

Description
___________
 
The append operator ``[]`` is a write operator: it alters the underlying variable. It cannot be used for reading, as it doesn't produce a value. Hence, it is not possible to use the append operator as an argument, or with a short assignement operator.

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
