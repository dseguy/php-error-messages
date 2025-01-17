.. _duplicate-type-%s-is-redundant:

Duplicate type %s is redundant
------------------------------
 
.. meta::
	:description:
		Duplicate type %s is redundant: When declaring a complex type, each part of the type must be unique.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Duplicate type %s is redundant
	:og:description: When declaring a complex type, each part of the type must be unique
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/duplicate-type-%25s-is-redundant.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Duplicate type %s is redundant
	:twitter:description: Duplicate type %s is redundant: When declaring a complex type, each part of the type must be unique
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
When declaring a complex type, each part of the type must be unique. This means that a type can only be mentionned once.

This constraint is actually easier to explain than to detail: of course, it is important to avoid repeating the same type, yet types may be declared with different case, with or without initial slash, with a local alias, or also with a class_alias(). 

Then, there is also the possiblity for the type to be part of a composed type, such as bool (which is true|false), or mixed, or iterable, etc. 

Only the first redundant type is reported.


Example
_______

.. code-block:: php

   <?php
   
   function foo() : A|a|\a|\A {}
   
   function goo() : bool|false {}
   
   ?>


Literal Examples
****************
+ Duplicate type a is redundant
+ Duplicate type false is redundant

Solutions
_________

+ Remove types that are double.
+ Remove the types.

Related Error Messages
______________________

+ :ref:`type-contains-both-true-and-false,-bool-must-be-used-instead`
+ :ref:`type-%s-contains-both-iterable-and-array`


In previous PHP versions, this error message used to be :ref:`type-%s-contains-both-iterable-and-array`.
