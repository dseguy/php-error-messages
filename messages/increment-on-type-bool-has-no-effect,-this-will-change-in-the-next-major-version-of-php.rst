Increment on type bool has no effect, this will change in the next major version of PHP
---------------------------------------------------------------------------------------
 
Description
___________
 
Post increment on a boolean leaves the value unchanged. While PHP updates strings, integers, floats with the post-increment operator, booleans are immune. 

Until PHP 8.3, it was silently done. In PHP 8.3, it raises a deprecation warning, and it will be removed in PHP 9.0. 

Post increment, pre increment, as well as increment and decrement are affected by that warning. str_increment() and str_decrement() refuses to use boolean, due to type. 

Example
_______

.. code-block:: output

   <?php
   
   $a = true;
   $a++;
   
   $b = false;
   --$b;
   
   ?>
