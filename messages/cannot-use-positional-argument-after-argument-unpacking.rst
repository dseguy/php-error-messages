.. _cannot-use-positional-argument-after-argument-unpacking:

Cannot use positional argument after argument unpacking
-------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot use positional argument after argument unpacking: It is not possible to put simple arguments after an unpacked argument.

Description
___________
 
It is not possible to put simple arguments after an unpacked argument. Said another way, the unpacked arguments must be the last one in the list. 

This happens when using a mix of array unpacking and arguments. It also happens when spreading an array with a mix of numeric and string keys. 

Example
_______

.. code-block:: php

   <?php
   
   // Valid, the unpacked argument is the last
   foo($a, $b, ...$c);
   
   // Also valid, the unpacked arguments are the last
   foo($a, $b, ...$c, ...$d);
   
   // Not valid
   foo(...$a, $b, ...$c);
   
   // This is invalid, as the numeric arguments are after the 'x'
   $a = ['x' => [1], 13, 14];
   foo(...$a);
   
   // This is valid, as long as x is not argument 0 or 1. Then, it yields another error.
   $a = [13, 14, 'x' => [1]];
   foo(...$a);
   
   ?>

Solutions
_________

+ Move the positional arguments to be beginning of the signature call.
+ Sort the unpacked array with krsort() or ksort(), before or after PHP 8.2.
+ Remove the positional arguments.
