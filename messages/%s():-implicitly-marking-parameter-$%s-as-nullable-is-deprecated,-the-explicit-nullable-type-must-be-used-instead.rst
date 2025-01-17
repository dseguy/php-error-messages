.. _%s():-implicitly-marking-parameter-\$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead:

Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead
-----------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead: Until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead
	:og:description: Until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-implicitly-marking-parameter-%24%25s-as-nullable-is-deprecated%2C-the-explicit-nullable-type-must-be-used-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead
	:twitter:description: Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Until PHP 8.4, it is possible to use a default value of null, on a parameter that is not nullable. This special situation makes the parameter nullable: it may be omitted, or explicitely passed as null. This is a hidden type, as the null type is not explicit, yet it is fully usable.

In PHP 8.4, this is not possible anymore. For consistency reasons, the type must be explicitly displayed. Until then, it was silent. 


Example
_______

.. code-block:: php

   <?php
   
   function foo(string $s = null) {}
   
   class X {
       function foo(string $s = null) {}
   }
   
   ?>


Literal Examples
****************
+ foo(): Implicitly marking parameter $s as nullable is deprecated, the explicit nullable type must be used instead
+ X::bar(): Implicitly marking parameter $s as nullable is deprecated, the explicit nullable type must be used instead

Solutions
_________

+ Add ``?`` to the type.
+ Add ``null|`` to the type.
+ Use a default value in the range of the specified type.

Related Error Messages
______________________

+ :ref:`default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value`

Changed Behavior
________________

This error may appear in different PHP versions `implicitNullable <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/implicitNullable.html>`_.
