.. _cannot-access-parent::-when-no-class-scope-is-active:

Cannot access parent:: when no class scope is active
----------------------------------------------------
 
	.. meta::
		:description:
			Cannot access parent:: when no class scope is active: ``parent`` refers to the parent class of the one.

		:og:type: article
		:og:title: Cannot access parent:: when no class scope is active
		:og:description: ``parent`` refers to the parent class of the one
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-parent%3A%3A-when-no-class-scope-is-active.html

Description
___________
 
``parent`` refers to the parent class of the one. As such, ``parent`` can only be used inside a class or a trait.

Example
_______

.. code-block:: php

   <?php
   
   static::x;
   
   ?>

Solutions
_________

+ Move the code inside a method, in a trait or a class.
+ Use the full name of the class that should be used.
