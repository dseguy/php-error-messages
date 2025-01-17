.. _'\%s'-is-an-invalid-class-name:

'\%s' is an invalid class name
------------------------------
 
	.. meta::
		:description:
			'\%s' is an invalid class name: ``self`` describes the current class.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: &#039;\%s&#039; is an invalid class name
		:og:description: ``self`` describes the current class
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%27%5C%25s%27-is-an-invalid-class-name.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: '\%s' is an invalid class name
	:twitter:description: '\%s' is an invalid class name: ``self`` describes the current class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
``self`` describes the current class. It is a relative class name, as it has no literal value. 

As such, it doesn't have an absolute path version, such as ``\self``. Hence, the error emitted there.

This error is also emitted for ``static`` and ``parent``. 

It was possible to circumvent this check until PHP 8.1, with ``namespace\%s`` syntax, where ``namespace`` represents the current namespace. 


Example
_______

.. code-block:: php

   <?php
   
   function foo(\self $a) {};
   
   function foo( $a) : \self {};
   
   class X {
       private \self $f;
       private \x $f2;
   }
   
   ?>


Literal Examples
****************
+ '\self' is an invalid class name
+ '\parent' is an invalid class name
+ '\static' is an invalid class name

Solutions
_________

+ Remove the initial backslash.
+ Use the literal name of the intended class.

Related Error Messages
______________________

+ :ref:`type-declaration-'%s'-must-be-unqualified`
+ :ref:`'namespace\%s'-is-an-invalid-class-name`
