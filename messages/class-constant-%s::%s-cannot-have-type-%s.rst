.. _class-constant-%s::%s-cannot-have-type-%s:

Class constant %s::%s cannot have type %s
-----------------------------------------
 
	.. meta::
		:description:
			Class constant %s::%s cannot have type %s: Some native PHP types are not allowed with a class constant.

		:og:type: article
		:og:title: Class constant %s::%s cannot have type %s
		:og:description: Some native PHP types are not allowed with a class constant
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-constant-%25s%3A%3A%25s-cannot-have-type-%25s.html

Description
___________
 
Some native PHP types are not allowed with a class constant. This is the case of ``void``, ``never`` and ``callable``. Any mention of them, alone or in a compsed type generates this error. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	const callable|int A = 1;
   }
   
   ?>


Literal Examples
****************
+ Class constant X::A cannot have type callable|int

Solutions
_________

+ Remove any illegal type from the definition of the constant.
+ Remove all types from the definition of the constant.

Related Error Messages
______________________

+ :ref:`property-%s::$%s-cannot-have-type-%s`
