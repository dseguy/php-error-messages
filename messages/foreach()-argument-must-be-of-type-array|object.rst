.. _foreach()-argument-must-be-of-type-array|object:

foreach() argument must be of type array|object
-----------------------------------------------
 
	.. meta::
		:description lang=en:
			foreach() argument must be of type array|object: foreach() works on arrays or objects.

Description
___________
 
foreach() works on arrays or objects. For the array, all the elements of the array will be read; for the objects, it is either the public properties, read like an array, or the Iterator interface, which uses the specific methods. 

Then, any other type is forbidden to be used with foreach(). This means all scalars elements, including string, integer and null. 

Example
_______

.. code-block:: php

   <?php
   
   $source = null;
   foreach($source as $x) { }
   
   ?>

Solutions
_________

+ Check that the source of the foreach can be used with is_iterable().


In previous PHP versions, this error message used to be :ref:`invalid-argument-supplied-for-foreach()`.
