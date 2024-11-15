.. _cannot-instantiate-interface-%s:

Cannot instantiate interface %s
-------------------------------
 
	.. meta::
		:description:
			Cannot instantiate interface %s: An interface represents an abstract class, and cannot be instantiated alone.

		:og:type: article
		:og:title: Cannot instantiate interface %s
		:og:description: An interface represents an abstract class, and cannot be instantiated alone
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-instantiate-interface-%25s.html

Description
___________
 
An interface represents an abstract class, and cannot be instantiated alone. For that, the interface must be implemented by a class, aka, it must be specified with the ``implements`` keyword.

Example
_______

.. code-block:: php

   <?php
   
   interface i {}
   
   //Cannot instantiate interface i
   new i();
   
   class xi implements i {
   }
   
   new xi(); 
   
   ?>


Literal Examples
****************
+ Cannot instantiate interface i

Solutions
_________

+ Implement the interface with a class and use that class.

Related Error Messages
______________________

+ :ref:`cannot-instantiate-trait-%s`
+ :ref:`cannot-instantiate-enum-%s`
