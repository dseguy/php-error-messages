.. _cannot-throw-objects-that-do-not-implement-throwable:

Cannot throw objects that do not implement Throwable
----------------------------------------------------
 
	.. meta::
		:description:
			Cannot throw objects that do not implement Throwable: All classes that are thrown must implement the interfave Throwable.

		:og:type: article
		:og:title: Cannot throw objects that do not implement Throwable
		:og:description: All classes that are thrown must implement the interfave Throwable
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-throw-objects-that-do-not-implement-throwable.html

Description
___________
 
All classes that are thrown must implement the interfave Throwable. It is possible to catch ``Throwable`` objects, but in fact, it is not possible to implement ``Throwable`` in a class: this is done by extending either ``Exception`` or ``Error``, which, in turn, implements Throwable.

Example
_______

.. code-block:: php

   <?php
   
   class x {}
   
   throw new x();
   
   ?>

Solutions
_________

+ Make the class extends ``\Exception``.
+ Make the class extends ``\Error``.
+ Do not throw the class.
