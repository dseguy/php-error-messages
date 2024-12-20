.. _object-of-class-%s-could-not-be-converted-to-%s:

Object of class %s could not be converted to %s
-----------------------------------------------
 
	.. meta::
		:description:
			Object of class %s could not be converted to %s: An object cannot be converted automatically into a string, without calling a dedicated method, or setting up the magic method called ``__toString``.

		:og:type: article
		:og:title: Object of class %s could not be converted to %s
		:og:description: An object cannot be converted automatically into a string, without calling a dedicated method, or setting up the magic method called ``__toString``
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/object-of-class-%25s-could-not-be-converted-to-%25s.html

Description
___________
 
An object cannot be converted automatically into a string, without calling a dedicated method, or setting up the magic method called ``__toString``. 

With native PHP operators and functions, the call to ``__toString`` is automagic. With custom functions, it is dependent on the ``strict_types`` configuration: when ``strict_types`` is activated, it prevents the automatic conversion to string, and yields the error.

Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   $x = new x;
   // This would work if the __toString() method is defined in X
   echo $x;
   
   function foo(string $s) {
       echo $s;
   }
   
   // This works with __toString() and without strict_types=1
   foo($x);
   
   ?>


Literal Examples
****************
+ Object of class X could not be converted to string

Solutions
_________

+ Remove the strict_types configuration.
+ Add a cast to (string) to explicitely activate the conversion to string.
+ Create a method to do the conversion, and use it, instead of the raw object.
