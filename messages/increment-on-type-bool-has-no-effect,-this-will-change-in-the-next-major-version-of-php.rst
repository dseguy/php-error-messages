.. _increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php:

Increment on type bool has no effect, this will change in the next major version of PHP
---------------------------------------------------------------------------------------
 
	.. meta::
		:description:
			Increment on type bool has no effect, this will change in the next major version of PHP: Post increment on a boolean leaves the value unchanged.

		:og:type: article
		:og:title: Increment on type bool has no effect, this will change in the next major version of PHP
		:og:description: Post increment on a boolean leaves the value unchanged
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/increment-on-type-bool-has-no-effect%2C-this-will-change-in-the-next-major-version-of-php.html

Description
___________
 
Post increment on a boolean leaves the value unchanged. While PHP updates strings, integers, floats with the post-increment operator, booleans are immune. 

Until PHP 8.3, it was silently done. In PHP 8.3, it raises a deprecation warning, and it will be removed in PHP 9.0. 

Post increment, pre increment, as well as increment and decrement are affected by that warning. str_increment() and str_decrement() refuses to use boolean, due to type. 


Example
_______

.. code-block:: php

   <?php
   
   $a = true;
   $a++;
   // $a = true
   
   $b = false;
   --$b;
   // $b = false
   
   ?>

Solutions
_________

+ Avoid initializing variables with booleans before incrementing them.
+ In case of doubt, check the type before the increment.

See Also
________

+ `New PHP error messages in PHP 8.3 <https://www.exakat.io/en/new-php-error-messages-in-php-8-3/>`_
