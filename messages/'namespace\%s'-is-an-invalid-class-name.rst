.. _'namespace\%s'-is-an-invalid-class-name:

'namespace\%s' is an invalid class name
---------------------------------------
 
	.. meta::
		:description lang=en:
			'namespace\%s' is an invalid class name: ``namespace``, when used in a fully qualified name, represents the current namespace.

Description
___________
 
``namespace``, when used in a fully qualified name, represents the current namespace. It is usually omitted. 

``self`` describes the current class. It is a relative class name, as it has no literal value. 

As such, ``self``` doesn't have an absolute path version, such as ``namespace\self``. Hence, the error emitted there.

This error is also emitted for ``static`` and ``parent``. 

Omitting the ``namespace`` keyword, and writing ``\self``, is also forbidden for the same reason.


Example
_______

.. code-block:: php

   <?php
   
   function foo(namespace\self $a) {};
   
   function foo( $a) : namespace\self {};
   
   class x {
       private namespace\self $f;
       // private namespace\x $f;
   }
   
   ?>

Solutions
_________

+ Remove the initial namespace and backslash.
+ Use the literal name of the intended class.

Related Error Messages
______________________

+ :ref:`type-declaration-'%s'-must-be-unqualified`
+ :ref:`'\%s'-is-an-invalid-class-name`
