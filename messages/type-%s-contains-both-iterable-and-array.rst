.. _type-%s-contains-both-iterable-and-array:

Type %s contains both iterable and array
----------------------------------------
 
	.. meta::
		:description lang=en:
			Type %s contains both iterable and array: Since PHP 8.

Description
___________
 
Since PHP 8.0 and the advent of union types, it is possible to write a type with duplicate type in it. This is obviously the case of the second function, in example.

It is less obvious to spot that ``array`` and ``iterable`` are redundant, yet, ``iterable`` = ``array|Traversable``. So, ``iterable`` is sufficient, to also cover ``array``.

This is a specific case of the general error that target any duplicate type in a definition. 


Example
_______

.. code-block:: php

   <?php
   
   function foo() : array|iterable { }
   
   function goo() : array|array { }
   
   ?>

Solutions
_________

+ Remove the ``array`` type, and only use ``iterable`` for both.
+ Remove the ``iterable`` type, and only use ``array`` for this type.

Related Error Messages
______________________

+ :ref:`duplicate-type-%s-is-redundant`

See Also
________

+ `Iterables <https://www.php.net/manual/en/language.types.iterable.php>`_
