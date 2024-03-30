.. _constructors-cannot-declare-a-return-type:

Constructors cannot declare a return type
-----------------------------------------
 
	.. meta::
		:description lang=en:
			Constructors cannot declare a return type: There can be no return type for a constructor method.

Description
___________
 
There can be no return type for a constructor method. It is called while creating a new instance of an object, but it doesn't return the object itself. This is the case even if $this is available in the method. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	function __construct() : int {
   	
   	}
   }
   
   ?>

Solutions
_________

+ Remove the return type of the method.

Related Error Messages
______________________

+ :ref:`destructors-cannot-declare-a-return-type`
