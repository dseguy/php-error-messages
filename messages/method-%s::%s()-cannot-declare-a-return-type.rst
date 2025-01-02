.. _method-%s::%s()-cannot-declare-a-return-type:

Method %s::%s() cannot declare a return type
--------------------------------------------
 
	.. meta::
		:description:
			Method %s::%s() cannot declare a return type: There can be no return type for certain methods, such as the constructor and the desctructor.

		:og:type: article
		:og:title: Method %s::%s() cannot declare a return type
		:og:description: There can be no return type for certain methods, such as the constructor and the desctructor
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s%28%29-cannot-declare-a-return-type.html

Description
___________
 
There can be no return type for certain methods, such as the constructor and the desctructor. 

The constructor is called while creating a new instance of an object, but it doesn't return the object itself.This is the case even if $this is available in the method. 

The destructor is called while destroying an instance, and shall not return anything.

Theses methods must remain without a return type: not ``void``, not ``mixed``, not ``never``, or anthing else.


Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function __construct() : int {	}
   	function __destruct() : string {	}
   }
   
   ?>


Literal Examples
****************
+ Method X::__construct() cannot declare a return type
+ Method X::__destruct() cannot declare a return type

Solutions
_________

+ Remove the return type of the method.

Related Error Messages
______________________

+ :ref:`destructors-cannot-declare-a-return-type`
+ :ref:`constructors-cannot-declare-a-return-type`
