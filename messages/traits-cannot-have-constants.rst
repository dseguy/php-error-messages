.. _traits-cannot-have-constants:

Traits cannot have constants
----------------------------
 
	.. meta::
		:description:
			Traits cannot have constants: Constants were authorised in traits in PHP 8.

		:og:type: article
		:og:title: Traits cannot have constants
		:og:description: Constants were authorised in traits in PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/traits-cannot-have-constants.html

Description
___________
 
Constants were authorised in traits in PHP 8.2. Until then, they are not allowed, at compile time.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
       const X = 1;
   }
   
   echo T::X;
   
   ?>

Solutions
_________

+ Put the constant in the host class.
+ Put the constant in an interface.
+ Do not use the constant.
+ Move to PHP 8.2 or later.

Related Error Messages
______________________

+ :ref:`cannot-access-trait-constant-%s::%s-directly`


In more recent PHP versions, this error message is now :ref:`cannot-access-trait-constant-%s::%s-directly`.
