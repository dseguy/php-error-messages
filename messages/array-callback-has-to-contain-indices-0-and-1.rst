.. _array-callback-has-to-contain-indices-0-and-1:

Array callback has to contain indices 0 and 1
---------------------------------------------
 
	.. meta::
		:description:
			Array callback has to contain indices 0 and 1: PHP uses an array format to represents callback methods: it is an array with two elements.

		:og:type: article
		:og:title: Array callback has to contain indices 0 and 1
		:og:description: PHP uses an array format to represents callback methods: it is an array with two elements
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/array-callback-has-to-contain-indices-0-and-1.html

Description
___________
 
PHP uses an array format to represents callback methods: it is an array with two elements. The first element is the class, and the second element is the method. To be valid, this array must also only use the index 0 and 1 (resp.) for these elements.

Also, note that this array must only have two elements.

With the explicit 0 and 1 indices, the order of the elements are not important in the array. With omitted indices, the order is important for PHP to differentiate which is the class, and which is the method.


Example
_______

.. code-block:: php

   <?php
   
   class x { static function foo() {} }
   
   $callback = [3 => x::class, 'foo'];
   
   $callback();
   
   ?>

Solutions
_________

+ Apply array_values() to the array before using it as a callback.
+ Convert the array syntax to the new x::foo(...) syntax.
+ Convert the array syntax to the string '\x::foo' syntax.
+ Remove the index in the array definition.
