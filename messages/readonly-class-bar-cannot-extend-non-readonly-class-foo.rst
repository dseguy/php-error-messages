.. _readonly-class-bar-cannot-extend-non-readonly-class-foo:

Readonly class Bar cannot extend non-readonly class Foo
-------------------------------------------------------
 
	.. meta::
		:description:
			Readonly class Bar cannot extend non-readonly class Foo: A readonly class cannot extends a non-readonly class.

		:og:type: article
		:og:title: Readonly class Bar cannot extend non-readonly class Foo
		:og:description: A readonly class cannot extends a non-readonly class
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/readonly-class-bar-cannot-extend-non-readonly-class-foo.html

Description
___________
 
A readonly class cannot extends a non-readonly class; a non-readonly class cannot extends a readonly class. Both classes must be readonly or non-readonly to be able to extends one another. This is due to readonly being applied to all available properties, which is ambiguous with class hierarchies. 

Example
_______

.. code-block:: php

   <?php
   
   class Foo
   {
   }
   
   readonly class Bar extends Foo
   {
   }
   
   ?>

Solutions
_________

+ Make both classes readonly.
+ Make both classes non-readonly.
+ Make both classes non-readonly and apply readonly per properties.
