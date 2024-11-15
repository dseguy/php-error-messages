.. _class-b-cannot-implement-previously-implemented-interface-i:

Class foo cannot implement previously implemented interface i
-------------------------------------------------------------
 
	.. meta::
		:description:
			Class foo cannot implement previously implemented interface i: When a class implements an interface, that interface must only be cited once.

		:og:type: article
		:og:title: Class foo cannot implement previously implemented interface i
		:og:description: When a class implements an interface, that interface must only be cited once
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-b-cannot-implement-previously-implemented-interface-i.html

Description
___________
 
When a class implements an interface, that interface must only be cited once. In the example code, the same interface is mentionned several times, by simple repetition, by making it an absolute name, class_alias() or a local type alias. 

The error doesn't apply when the interface is implemented in the parent classes. 


Example
_______

.. code-block:: php

   <?php
   
   use i as j;
   
   interface i {}
   
   // Multiple ways to reference an interface
   class foo implements i, i, \i, j {}
   
   ?>

Solutions
_________

+ Remove the duplicate calls to the same interface.
