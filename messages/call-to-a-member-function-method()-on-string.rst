Call to a member function method() on string
--------------------------------------------
 
Description
___________
 
This error happens when the object syntax is used on a string. A string is a scalar type, and cannot hold method, properties nor constants. The type of the variable should be checked before usage. This also happens with the nullsafe operator, which only protects against NULL used as an object.

Example
_______

.. code-block:: php

   <?php
   
   'a'?->foo();
   
   $string = 'abc';
   $string->foo();
   
   ?>

Solutions
_________

+ Check the type of the object before usage.
