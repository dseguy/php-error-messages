.. _undefined-variable:

Undefined variable
------------------
 
	.. meta::
		:description lang=en:
			Undefined variable: This notice is emitted when a variable is being used before being defined.

Description
___________
 
This notice is emitted when a variable is being used before being defined. In a word, the variable is not created yet, so PHP creates it on the fly, as NULL, then uses it. 

Example
_______

.. code-block:: php

   <?php
   
   echo $x;
   
   ?>

Solutions
_________

+ Give the variable a default value.

Related Error Messages
______________________

+ :ref:`undefined-array-key`
