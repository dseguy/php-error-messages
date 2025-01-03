.. _returning-by-reference-from-a-void-function-is-deprecated:

Returning by reference from a void function is deprecated
---------------------------------------------------------
 
	.. meta::
		:description:
			Returning by reference from a void function is deprecated: The return type ``void`` means that no value is returned, not even NULL.

		:og:type: article
		:og:title: Returning by reference from a void function is deprecated
		:og:description: The return type ``void`` means that no value is returned, not even NULL
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/returning-by-reference-from-a-void-function-is-deprecated.html

Description
___________
 
The return type ``void`` means that no value is returned, not even NULL. This means that the ``&`` option has no value here. Since PHP 8.1, this is reported as deprecated.

In the end, it has no value to collect the returned value of a void function, reference or not.

Example
_______

.. code-block:: php

   <?php
   
   function &foo() : void { }
   
   ?>

Solutions
_________

+ Do not collect the returned valueo of a void function.
+ Remove the reference in the method definition.
