Cannot use positional argument after argument unpacking
-------------------------------------------------------
 
Description
___________
 
When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument. Said another way, the unpacked arguments must be the last one in the list. 

Example
_______

.. code-block:: php

   <?php
   
   // Valid, the unpacked argument is the last
   foo($a, $b, ...$c);
   
   // Also valid, the unpacked arguments are the last
   foo($a, $b, ...$c, ...$d);
   
   // Not valida
   foo(...$a, $b, ...$c);
   
   ?>

Solutions
_________

+ Move the positional arguments to be beginning of the signature call.
+ Sort the unpacked array with krsort() or ksort(), before or after PHP 8.2.
+ Remove the positional arguments.
