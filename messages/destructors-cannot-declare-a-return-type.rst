.. _destructors-cannot-declare-a-return-type:

Destructors cannot declare a return type
----------------------------------------
 
	.. meta::
		:description lang=en:
			Destructors cannot declare a return type: There can be no return type for a destructor method.

Description
___________
 
There can be no return type for a destructor method. It is called while destroying an existing instance of an object, and the object won't be available at the end.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	function __destruct() : int {
   	
   	}
   }
   
   ?>

Solutions
_________

+ Remove the return type of the method.
