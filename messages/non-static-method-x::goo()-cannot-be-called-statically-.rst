Non-static method x::goo() cannot be called statically 
-------------------------------------------------------
 
Description
___________
 
While a non-static method can call a static method, the contrary is not possible. In particular, the non-static method will not be able to have a valid ``$this`` variable, since the static call doesn't provide one. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
       static function foo() {
           self::goo();
       }
       
       function goo() {}
   }
   
   (new x)->foo();
   
   ?>

Solutions
_________

+ Make the concrete method static too.
+ Find an object to call the non-static method.
