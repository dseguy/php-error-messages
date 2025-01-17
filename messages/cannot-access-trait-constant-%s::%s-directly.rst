.. _cannot-access-trait-constant-%s::%s-directly:

Cannot access trait constant %s::%s directly
--------------------------------------------
 
.. meta::
	:description:
		Cannot access trait constant %s::%s directly: Traits cannot be used indepently from a host class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot access trait constant %s::%s directly
	:og:description: Traits cannot be used indepently from a host class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-trait-constant-%25s%3A%3A%25s-directly.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot access trait constant %s::%s directly
	:twitter:description: Cannot access trait constant %s::%s directly: Traits cannot be used indepently from a host class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Traits cannot be used indepently from a host class. They must be used inside a class, with the ``use`` keyword. 

It is also not possible to call a method or a property on a trait.

Trait constants were introduced after direct access to trait features was banned, so there was no time where accessing a trait constant was possible, unlike trait properties or methods.


Example
_______

.. code-block:: php

   <?php
   
   trait T {
   	public static const C = 1;
   }
   
   echo T::C;
   
   ?>


Literal Examples
****************
+ Cannot access trait constant T::C directly

Solutions
_________

+ Use the trait in a class and access its features.
+ Convert the trait into a class and access its features.

Related Error Messages
______________________

+ :ref:`accessing-static-trait-property-%s::$%s-is-deprecated`
+ :ref:`calling-static-trait-method-%s::%s-is-deprecated`
+ :ref:`traits-cannot-have-constants`
+ :ref:`accessing-static-trait-property-%s::$%s-is-deprecated,-it-should-only-be-accessed-on-a-class-using-the-trait`


In previous PHP versions, this error message used to be :ref:`traits-cannot-have-constants`.
