.. _undefined-constant-%s::%s:

Undefined constant %s::%s
-------------------------
 
	.. meta::
		:description lang=en:
			Undefined constant %s::%s: The requested class constant could not be found.

Description
___________
 
The requested class constant could not be found.

The error message is distinct for the global constants, although there is no mention of class in this one.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	const Z = 1;
   	private A = 2;
   }
   
   echo x::Y; 
   
   ?>

Solutions
_________

+ Find the actual name of the requested class constant.
+ Find the actual class of the requested class constant.
+ Check the namespace, or its import.
+ Check the visibility of the class constant: it may be private, or protected.
+ Check the autoload system, to make sure the definition could be found.
+ Define the class constant in the class, or its traits, interfaces or parents.

Related Error Messages
______________________

+ :ref:`undefined-constant-\"%s`


In previous PHP versions, this error message used to be :ref:`undefined-class-constant-'%s::%s'`.
