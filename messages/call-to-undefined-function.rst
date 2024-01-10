Call to undefined function
--------------------------
 
Description
___________
 
This happens when calling a function that is not defined. 

There should be a function definition in the code, and that function must be included in the code before its call. 

The function may be defined in a PHP extension, or its core: then, the function has no definition. Its existence may be checked with a call to ``get_defined_function()``, which lists all the functions, at the execution point.  

The function might be defined in a different namespace, or its import might be missing.


Example
_______

.. code-block:: php

   <?php
   
   foo();
   
   function foo() {}
   
   ?>
