.. _traits-cannot-have-constants:

Traits cannot have constants
----------------------------
 
	.. meta::
		:description lang=en:
			Traits cannot have constants: Constants were authorised in traits in PHP 8.

Description
___________
 
Constants were authorised in traits in PHP 8.2. Until then, they are not allowed, at compile time.

Example
_______

.. code-block:: php

   <?php
   
   trait t {
       const X = 1;
   }
   
   echo t::X;
   
   ?>

Solutions
_________

+ Put the constant in the host class.
+ Put the constant in an interface.
+ Do not use the constant.

Related Error Messages
______________________

+ :ref:`cannot-access-trait-constant-t::x-directly`


In more recent PHP versions, this error message is now ":ref:`Cannot access trait constant t::X directly <cannot-access-trait-constant-t::x-directly>`"
