Typed property x::$y must not be accessed before initialization
---------------------------------------------------------------
 
Description
___________
 
When a property is typed, it starts its existence in an 'undefined' state, which cannot be compared to anything else. The property must be assigned before a read access can happen. The same applies to both property types, static or not.

Example
_______

.. code-block:: php

   <?php
   
   class x {
       public int $y;
   }
   
   var_dump((new x)->y);
   
   ?>

Solutions
_________

+ Ensure that the property receives a value before reading it.
+ Use empty() or isset() to check if the property has been set, before reading.

See Also
________

+ `Typed property must not be accessed before initialization <https://madewithlove.com/blog/typed-property-must-not-be-accessed-before-initialization/>`_
