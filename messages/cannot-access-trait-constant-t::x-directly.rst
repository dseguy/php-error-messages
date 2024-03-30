.. _cannot-access-trait-constant-t::x-directly:

Cannot access trait constant t::X directly
------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot access trait constant t::X directly: It is not possible to access constants in a trait directly.

Description
___________
 
It is not possible to access constants in a trait directly. The code must use the host class to do so. 

Example
_______

.. code-block:: php

   <?php
   
   trait t {
       const X = 1;
   }
   
   class X {
   	use t;
   }
   
   echo X::X; // displays 1
   
   // error
   echo t::X;
   
   ?>

Solutions
_________

+ Move the constant in an interface.
+ Move the constant the host class.

Related Error Messages
______________________

+ :ref:`traits-cannot-have-constants`


In previous PHP versions, this error message used to be ":ref:`Traits cannot have constants <traits-cannot-have-constants>`"
