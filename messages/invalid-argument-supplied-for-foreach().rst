.. _invalid-argument-supplied-for-foreach():

Invalid argument supplied for foreach()
---------------------------------------
 
	.. meta::
		:description lang=en:
			Invalid argument supplied for foreach(): foreach() works on arrays or objects.

Description
___________
 
foreach() works on arrays or objects. For the array, all the elements of the array are read; for the objects, it is either the public properties, read like an array, or the Iterator interface, which uses specific methods. 

Then, any other type is forbidden to be used with foreach(). This means all scalars elements, including string, integer and null. 

Example
_______

.. code-block:: php

   <?php
   
   foreach(1234 as $b) {
   	echo $b;
   }
   
   ?>

Solutions
_________

+ Check that the source of the foreach can be used with is_iterable().


In more recent PHP versions, this error message is now :ref:`foreach()-argument-must-be-of-type-array|object`.
