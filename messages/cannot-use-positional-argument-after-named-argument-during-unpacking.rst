.. _cannot-use-positional-argument-after-named-argument-during-unpacking:

Cannot use positional argument after named argument during unpacking
--------------------------------------------------------------------
 
	.. meta::
		:description:
			Cannot use positional argument after named argument during unpacking: Unpacking only positional arguments, with array_keys() and when the order is already correct.

		:og:type: article
		:og:title: Cannot use positional argument after named argument during unpacking
		:og:description: Unpacking only positional arguments, with array_keys() and when the order is already correct
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-positional-argument-after-named-argument-during-unpacking.html

Description
___________
 
Unpacking only positional arguments, with array_keys() and when the order is already correct.

Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b, $c) {}
   
   // unpacking argument, but positional argument is misplaced
   $arguments = ['a' => 1, 2, 'c' => 3];
   foo(...$arguments);
   
   // make everyone positional. It works since order is already correct
   foo(...array_values($arguments));
   
   ?>

Solutions
_________

+ Add the missing argument names to finish the argument array.
+ Move the positional argument to the beginning of the array (array_unshift, or append it at the array creation), when the argument order makes it possible.
+ Use ksort() on the keys, when it makes sense.
