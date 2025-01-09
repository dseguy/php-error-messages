.. _generator-return-type-must-be-a-supertype-of-generator:

Generator return type must be a supertype of Generator
------------------------------------------------------
 
	.. meta::
		:description:
			Generator return type must be a supertype of Generator: When a method or a function uses a ``yield`` keyword, it becomes a generator.

		:og:type: article
		:og:title: Generator return type must be a supertype of Generator
		:og:description: When a method or a function uses a ``yield`` keyword, it becomes a generator
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/generator-return-type-must-be-a-supertype-of-generator.html

Description
___________
 
When a method or a function uses a ``yield`` keyword, it becomes a generator. It also means that the return type of this method must be Generator, or any other of its supertypes: ``Traversable``, ``Iterator``, ``Generator`` or ``iterable``.

There is no way to set a type on the yielded values: only on the returned values. In this case, it will be a ``Generator``. Strangely, any value in a ``return`` expression is also valid.

It may also be simply removed, and left implicit.

Example
_______

.. code-block:: php

   <?php
   
   function foo() : X {
   	yield 1;
   	
   	return true;
   }
   
   ?>

Solutions
_________

+ Use the return type ``Generator``.
