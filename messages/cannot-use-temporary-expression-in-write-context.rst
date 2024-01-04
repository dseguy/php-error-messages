Cannot use temporary expression in write context
------------------------------------------------
 
Description
___________
 
Literal values and constants cannot be used with the append operator. Those values must be placed in a container, such as a variable, array element, property. That way, they become updatable, and can be appended.

The literal values may be hidden in a returned value, or by a call to native PHP functions which return literals.

Passing a dimension fetch on a temporary by reference is also not allowed. 
Example
_______

.. code-block:: php

   <?php
   
   // Attempt to append 1 to an empty literal array
   [][] = 1;
   array()[] = 1;
   
   $a = array();
   $a[] = 1;
   
   $fn = function(&$ref) {};
   $fn([0, 1][0]);
   
   function goo() { return [0, 1][0];}
   // The constant is hidden in the function goo()
   $fn(goo());
   
   function hoo($fn) {
   	// PHP provide literal values
   	$fn(func_get_args()[0]);
   }
   
   
   ?>
