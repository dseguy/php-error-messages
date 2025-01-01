.. _class-%s-must-implement-interface-%s-as-part-of-either-%s-or-%s:

Class %s must implement interface %s as part of either %s or %s
---------------------------------------------------------------
 
	.. meta::
		:description:
			Class %s must implement interface %s as part of either %s or %s: It is not possible to implement directly the mentionned interface.

		:og:type: article
		:og:title: Class %s must implement interface %s as part of either %s or %s
		:og:description: It is not possible to implement directly the mentionned interface
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-must-implement-interface-%25s-as-part-of-either-%25s-or-%25s.html

Description
___________
 
It is not possible to implement directly the mentionned interface. That interface is actually implemented by a selection of PHP native classes: these classes may be extended, and, as such, the children classes also implements the initial interface.

This error message is applicable to a few PHP native interfaces, such as ``Throwable`` (via ``Error`` and ``Exception``) and ``Traversable`` (via ``Iterator`` and ``IteratorAggregate``).

Example
_______

.. code-block:: php

   <?php
   
   class x implements Throwable {}
   
   ?>


Literal Examples
****************
+ Enum Foo must implement interface Traversable as part of either Iterator or IteratorAggregate
+ Class X cannot implement interface Throwable, extend Exception or Error instead

Solutions
_________

+ Extends one of the classes mentionned in the error message.
+ Remove the implementats and its interface.


In more recent PHP versions, this error message is now :ref:`%s-%s-must-implement-interface-%s-as-part-of-either-%s-or-%s`.
