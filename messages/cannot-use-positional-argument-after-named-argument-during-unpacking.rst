.. _cannot-use-positional-argument-after-named-argument-during-unpacking:

Cannot use positional argument after named argument during unpacking
--------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot use positional argument after named argument during unpacking: Unpacking only positional arguments, with array_keys() and when the order is already correct.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use positional argument after named argument during unpacking
	:og:description: Unpacking only positional arguments, with array_keys() and when the order is already correct
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-positional-argument-after-named-argument-during-unpacking.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use positional argument after named argument during unpacking
	:twitter:description: Cannot use positional argument after named argument during unpacking: Unpacking only positional arguments, with array_keys() and when the order is already correct
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

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

Related Error Messages
______________________

+ :ref:`named-parameter-$%s-overwrites-previous-argument`
