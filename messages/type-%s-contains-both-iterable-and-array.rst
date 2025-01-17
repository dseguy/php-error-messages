.. _type-%s-contains-both-iterable-and-array:

Type %s contains both iterable and array, which is redundant
------------------------------------------------------------
 
.. meta::
	:description:
		Type %s contains both iterable and array, which is redundant: Since PHP 8.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Type %s contains both iterable and array, which is redundant
		:og:description: Since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-%25s-contains-both-iterable-and-array.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Type %s contains both iterable and array, which is redundant
		:twitter:description: Type %s contains both iterable and array, which is redundant: Since PHP 8
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Since PHP 8.0 and the advent of union types, it is possible to write a type with duplicate type in it. This is obviously the case of the second function, in example.

It is less obvious to spot that ``array`` and ``iterable`` are redundant, yet, ``iterable`` = ``array|Traversable``. So, ``iterable`` is sufficient, to also cover ``array``.

This is a specific case of the general error that target any duplicate type in a definition. 


Example
_______

.. code-block:: php

   <?php
   
   function foo() : array|iterable { }
   
   function goo() : array|array { }
   
   ?>


Literal Examples
****************
+ Type iterable|array contains both iterable and array, which is redundant

Solutions
_________

+ Remove the ``array`` type, and only use ``iterable`` for both.
+ Remove the ``iterable`` type, and only use ``array`` for this type.

Related Error Messages
______________________

+ :ref:`duplicate-type-%s-is-redundant`

See Also
________

+ `Iterables <https://www.php.net/manual/en/language.types.iterable.php>`_


In more recent PHP versions, this error message is now :ref:`duplicate-type-%s-is-redundant`.
