.. _undefined-constant-"%s:

Undefined constant "%s
----------------------
 
	.. meta::
		:description:
			Undefined constant "%s: The requested class doesn&#039;t exist.

		:og:type: article
		:og:title: Undefined constant &quot;%s
		:og:description: The requested class doesn&#039;t exist
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-constant-%5C%22%25s.html

Description
___________
 
The requested class doesn't exist. 

There is a distinct message for class constants.

Example
_______

.. code-block:: php

   <?php
   
   // early usage of the constant
   echo A;
   
   const A = 2;
   
   ?>


Literal Examples
****************
+ Undefined constant "A"

Solutions
_________

+ Find the actual name of the requested constant.
+ Check the namespace, or its import: ``use const``.
+ Check if the constant is used after its definition.

Related Error Messages
______________________

+ :ref:`undefined-constant-%s::%s`
+ :ref:`cannot-declare-self-referencing-constant`
