.. _destructors-cannot-declare-a-return-type:

Destructors cannot declare a return type
----------------------------------------
 
	.. meta::
		:description:
			Destructors cannot declare a return type: There can be no return type for a destructor method.

		:og:type: article
		:og:title: Destructors cannot declare a return type
		:og:description: There can be no return type for a destructor method
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/destructors-cannot-declare-a-return-type.html

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

Related Error Messages
______________________

+ :ref:`constructors-cannot-declare-a-return-type`
