.. _cannot-throw-objects-that-do-not-implement-throwable:

Cannot throw objects that do not implement Throwable
----------------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot throw objects that do not implement Throwable: All classes that are thrown must implement the interfave Throwable.

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
