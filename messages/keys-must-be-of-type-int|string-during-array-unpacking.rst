.. _keys-must-be-of-type-int|string-during-array-unpacking:

Keys must be of type int|string during array unpacking
------------------------------------------------------
 
	.. meta::
		:description:
			Keys must be of type int|string during array unpacking: Argument unpacking is the transformation of an array into a list of arguments.

		:og:type: article
		:og:title: Keys must be of type int|string during array unpacking
		:og:description: Argument unpacking is the transformation of an array into a list of arguments
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/keys-must-be-of-type-int%7Cstring-during-array-unpacking.html

Description
___________
 
Argument unpacking is the transformation of an array into a list of arguments. With arrays, the keys can only be integers or strings: they will be used for positional and named arguments, respectively.

Argument unpacking also applies to iterator and generator. In that case, it is possible to have keys that are not of type integer or string: they might be of any type. Yet, the unpacking of arguments needs these types to understand what kind of arguments is involved.

Any other type is forbidden : null, boolean, float (even without decimal part), and objects with __toString() magic methods. There is not type juggling applied, with or without strict_types directive.

Example
_______

.. code-block:: php

   <?php
   function foo(...$args) {
       var_dump($args);
   }
   function gen() {
       yield 1.23 => 123;
       yield '2.34' => 234;
   }
   
   try {
       print_r([...gen()]);
   } catch (Error $ex) {
       echo 'Exception: ' . $ex->getMessage() . PHP_EOL;
   }
   
   ?>

Solutions
_________

+ Ensure the iterator yields only integer or string types.
+ Ensure the generator yields only integer or string types.
