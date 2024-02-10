Cannot access trait constant t::X directly
------------------------------------------
 
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
