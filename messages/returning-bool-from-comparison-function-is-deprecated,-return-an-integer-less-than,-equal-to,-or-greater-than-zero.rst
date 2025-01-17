.. _returning-bool-from-comparison-function-is-deprecated,-return-an-integer-less-than,-equal-to,-or-greater-than-zero:

Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero
------------------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description:
			Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero: ``usort()`` requires a callback function, that is used to put set the order in the array.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero
		:og:description: ``usort()`` requires a callback function, that is used to put set the order in the array
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/returning-bool-from-comparison-function-is-deprecated%2C-return-an-integer-less-than%2C-equal-to%2C-or-greater-than-zero.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero
	:twitter:description: Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero: ``usort()`` requires a callback function, that is used to put set the order in the array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
``usort()`` requires a callback function, that is used to put set the order in the array. This function must return three different values: 

+ 1 if ``$a > $b``
+ 0 if ``$a == $b``
+ -1 if ``$a < $b``

The return type should be the integer subset ``[1, 0, -1]``, and since there is no such type in PHP, the ``int`` type shall be used. 

This is exactly compatible with the spaceship operator ``<=>``. 

Also, note that any positive integer is considered as 1, and any negative integer is considered as -1. 

This applies to ``usort()``, ``uasort()``, ``uksort()``. 

Not that without ``declare(strict_types=)``, the integer result of the callback is converted into a boolean, where 1 and -1 are both ``true``. This may lead to strange results.


Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b): bool { return $a > $b; }
   
   $array = [4, 2, 3, 0];
   
   usort($array, foo(...));
   
   ?>

Solutions
_________

+ Use the ``int`` return type.
+ Remove the return type.
