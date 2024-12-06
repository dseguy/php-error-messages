.. _cannot-redeclare-%s()-(previously-declared-in-%s:%d):

Cannot redeclare %s() (previously declared in %s:%d)
----------------------------------------------------
 
	.. meta::
		:description:
			Cannot redeclare %s() (previously declared in %s:%d): Functions must have a unique name: there cannot be two functions with the same name.

		:og:type: article
		:og:title: Cannot redeclare %s() (previously declared in %s:%d)
		:og:description: Functions must have a unique name: there cannot be two functions with the same name
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-%25s%28%29-%28previously-declared-in-%25s%3A%25d%29.html

Description
___________
 
Functions must have a unique name: there cannot be two functions with the same name. 

Function names are case insensitive, so making changing the case doesn't make the function name unique.

In fact, two functions in the same namespace cannot have the same name, so the complete constraint is namespace + function must be unique.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {}
   
   function FOO() {}
   
   ?>


Literal Examples
****************
+ Cannot redeclare foo() (previously declared in %s:%d)

Solutions
_________

+ Change the name of the function.
+ Make the function a closure.
+ Move the function to another namespace.
