.. _cannot-access-static::-when-no-class-scope-is-active:

Cannot access static:: when no class scope is active
----------------------------------------------------
 
	.. meta::
		:description:
			Cannot access static:: when no class scope is active: ``static`` refers to the class that was called to access the class elements (constants, method, properties.

		:og:type: article
		:og:title: Cannot access static:: when no class scope is active
		:og:description: ``static`` refers to the class that was called to access the class elements (constants, method, properties
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-static%3A%3A-when-no-class-scope-is-active.html

Description
___________
 
``static`` refers to the class that was called to access the class elements (constants, method, properties..). As such, ``static`` can only be used inside a class or a trait. 

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


In more recent PHP versions, this error message is now :ref:`cannot-use-"static"-when-no-class-scope-is-active`.
