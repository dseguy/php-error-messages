.. _cannot-declare-self-referencing-constant:

Cannot declare self-referencing constant
----------------------------------------
 
.. meta::
	:description:
		Cannot declare self-referencing constant: A self-referencing constant is a constant that is defined by itself.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot declare self-referencing constant
	:og:description: A self-referencing constant is a constant that is defined by itself
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-self-referencing-constant.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot declare self-referencing constant
	:twitter:description: Cannot declare self-referencing constant: A self-referencing constant is a constant that is defined by itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
A self-referencing constant is a constant that is defined by itself.

This error doesn't apply to global constants. The global constants are immediately made available, and, for that, they need to be evaluated: this leads to the error ``Undefined constant A``.

Self-referencing constants are not allowed, contraty to self-referencing acronym, that PHP enjoys.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       const A = x::A + 1;
   
       const B = self::C + 1;
       const C = x::B + 1;
   }
   
   ?>

Solutions
_________

+ Create a distinct constant that can help build this one.
+ Fix the name of the constant with a distinct one.
+ Fix the name of the class with a distinct one.

Related Error Messages
______________________

+ :ref:`undefined-constant-"%s`
