.. _'namespace\%s'-is-an-invalid-class-name:

'namespace\%s' is an invalid class name
---------------------------------------
 
	.. meta::
		:description:
			'namespace\%s' is an invalid class name: ``namespace``, when used in a fully qualified name, represents the current namespace.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: &#039;namespace\%s&#039; is an invalid class name
		:og:description: ``namespace``, when used in a fully qualified name, represents the current namespace
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%27namespace%5C%25s%27-is-an-invalid-class-name.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: 'namespace\%s' is an invalid class name
	:twitter:description: 'namespace\%s' is an invalid class name: ``namespace``, when used in a fully qualified name, represents the current namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
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
   
   class X {
       private namespace\self $f;
       private namespace\x $f2;
   }
   
   ?>


Literal Examples
****************
+ 'namespace\self' is an invalid class name

Solutions
_________

+ Remove the initial namespace and backslash.
+ Use the literal name of the intended class.

Related Error Messages
______________________

+ :ref:`type-declaration-'%s'-must-be-unqualified`
+ :ref:`'\%s'-is-an-invalid-class-name`
