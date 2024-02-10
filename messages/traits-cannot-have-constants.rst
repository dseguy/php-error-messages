Traits cannot have constants
----------------------------
 
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
