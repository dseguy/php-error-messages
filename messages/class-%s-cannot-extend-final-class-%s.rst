.. _class-%s-cannot-extend-final-class-%s:

Class %s cannot extend final class %s
-------------------------------------
 
	.. meta::
		:description:
			Class %s cannot extend final class %s: A ``final`` class is a class that cannot be extended.

		:og:type: article
		:og:title: Class %s cannot extend final class %s
		:og:description: A ``final`` class is a class that cannot be extended
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-extend-final-class-%25s.html

Description
___________
 
A ``final`` class is a class that cannot be extended. This means any class that attempts to use ``extends`` on this class fails.

This error is produced both by userland code and PHP native code, such as ``Generator``, etc.


Example
_______

.. code-block:: php

   <?
   
   class X extends Generator {}
   
   ?>


Literal Examples
****************
+ Class X cannot extend final class Generator

Solutions
_________

+ Use composition on the final class, to include it in another class.

Related Error Messages
______________________

+ :ref:`the-\"generator\"-class-is-reserved-for-internal-use-and-cannot-be-manually-instantiated`
