.. _undefined-constant-%s::%s:

Undefined constant %s::%s
-------------------------
 
	.. meta::
		:description lang=en:
			Undefined constant %s::%s: The requested class constant doesn't exist.

Description
___________
 
The requested class constant doesn't exist. 

Example
_______

.. code-block:: php

   <?php
   
   class x {}
   
   echo x::Y; 
   
   ?>

Solutions
_________

+ Find the actual name of the requested class constant.
+ Find the actual class of the requested class constant.
+ Define the class constant in the class, or its traits, interfaces or parents.


In previous PHP versions, this error message used to be :ref:`undefined-class-constant-'%s::%s'`.
