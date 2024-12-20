.. _type-declaration-'%s'-must-be-unqualified:

Type declaration '%s' must be unqualified
-----------------------------------------
 
	.. meta::
		:description:
			Type declaration '%s' must be unqualified: Scalar types are absolute, and shall not be written with the initial ``\``.

		:og:type: article
		:og:title: Type declaration &#039;%s&#039; must be unqualified
		:og:description: Scalar types are absolute, and shall not be written with the initial ``\``
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-declaration-%27%25s%27-must-be-unqualified.html

Description
___________
 
Scalar types are absolute, and shall not be written with the initial ``\``. It is always omitted. 

This error is reported for ``string``, ``int``, ``bool``, ``iterable``, ``never``, ``void``, ``object``, ``float``, ``null``, ``mixed``, ``true``, ``false``.

For some reason, ``array`` and ``callable`` are still not reported with this error. ``resource`` is also ignored, although it is only reserved, and not supported anyway.


Example
_______

.. code-block:: php

   <?php
   
   function foo(\string $x) {}
   
   ?>


Literal Examples
****************
+ Type declaration 'array' must be unqualified
+ Type declaration 'string' must be unqualified
+ Type declaration 'int' must be unqualified
+ Type declaration 'null' must be unqualified

Solutions
_________

+ Remove the leading backslash.
+ Remove the whole type.
+ Use a class type, which supports the leading backaslash.

Related Error Messages
______________________

+ :ref:`'namespace\%s'-is-an-invalid-class-name`
+ :ref:`'\%s'-is-an-invalid-class-name`
