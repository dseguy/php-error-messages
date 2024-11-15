.. _class-%s-cannot-implement-previously-implemented-interface-%s:

Class %s cannot implement previously implemented interface %s
-------------------------------------------------------------
 
	.. meta::
		:description:
			Class %s cannot implement previously implemented interface %s: It is not allowed to use several times the same interface in a ``implements`` clause, for classes, or ``extends`` for interfaces.

		:og:type: article
		:og:title: Class %s cannot implement previously implemented interface %s
		:og:description: It is not allowed to use several times the same interface in a ``implements`` clause, for classes, or ``extends`` for interfaces
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-implement-previously-implemented-interface-%25s.html

Description
___________
 
It is not allowed to use several times the same interface in a ``implements`` clause, for classes, or ``extends`` for interfaces.

The message is a bit confusing, since the interface is not already implemented, but rather, used in the implements clause. In fact, PHP checks first the list of names of the clause, then it checks the signatures of the methods.

This error message is dependent on the ``use`` expresion, and also the calls to ``class_alias()``.


Example
_______

.. code-block:: php

   <?php
   
   use i as j;
   
   interface i {}
   
   // Multiple ways to reference an interface
   class foo implements i, \i, j {}
   
   // This applies to interfaces too
   interface bar extends i, \i, j {}
   
   ?>

Solutions
_________

+ Remove the duplicate interface name.
