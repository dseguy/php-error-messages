.. _array_merge()-does-not-accept-unknown-named-parameters:

array_merge() does not accept unknown named parameters
------------------------------------------------------
 
	.. meta::
		:description lang=en:
			array_merge() does not accept unknown named parameters: array_merge() accepts one parameter, called ``\$arrays``.

Description
___________
 
array_merge() accepts one parameter, called ``\$arrays``. In fact, it is a variadic parameter, so this parameter may be repeated as needed. Yet, there is only one name for it.

When using array_merge() with a variadic argument, PHP tries to match the keys of the array with the parameters, and in this case, fails for all but one: ``$arrays``. 

The solution is to spread the array, after removing the string keys: with integer keys, PHP will not check the names.

There are several PHP native functions that behave like that: array_merge(), array_diff_key(), etc. In fact, any native method which has a variadic parameter.

PHP doesn't emit an error when spreading an array with unkown keys in a custom function.


Example
_______

.. code-block:: php

   <?php
   
   $a = ['x' => [1], 'y' => [3]];
   
   foo(...$a);
   //array_merge() does not accept unknown named parameters
   array_merge(...$a);
   
   function foo($x, array ...$arrays) {
       print_r($arrays);
   }
   
   ?>

Solutions
_________

+ Apply array_values() to the array that is used with array_merge().
