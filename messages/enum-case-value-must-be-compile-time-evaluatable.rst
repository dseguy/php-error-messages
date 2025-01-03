.. _enum-case-value-must-be-compile-time-evaluatable:

Enum case value must be compile-time evaluatable
------------------------------------------------
 
	.. meta::
		:description:
			Enum case value must be compile-time evaluatable: The value of a backed enumeration, string or integer, cannot be build with constant (global or classe).

		:og:type: article
		:og:title: Enum case value must be compile-time evaluatable
		:og:description: The value of a backed enumeration, string or integer, cannot be build with constant (global or classe)
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/enum-case-value-must-be-compile-time-evaluatable.html

Description
___________
 
The value of a backed enumeration, string or integer, cannot be build with constant (global or classe). It can only be build with literal values. 

This limitation was removed in PHP 8.2.

Example
_______

.. code-block:: php

   <?php
   
   enum Foo: string {
       case A = '/' . A;
       case B = '/' . __FILE__;
   }
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.2.
+ Replace the constants with literal values.
