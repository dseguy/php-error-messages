.. _type-declaration-'%s'-must-be-unqualified:

Type declaration '%s' must be unqualified
-----------------------------------------
 
	.. meta::
		:description lang=en:
			Type declaration '%s' must be unqualified: Scalar types are absolute, and shall not be written with the initial ``\``.

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

Solutions
_________

+ Remove the leading backslash.
+ Remove the whole type.
+ Use a class type, which supports the leading backaslash.

Related Error Messages
______________________

+ :ref:`'namespace\%s'-is-an-invalid-class-name`
+ :ref:`'\%s'-is-an-invalid-class-name`
