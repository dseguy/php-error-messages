.. _enum-%s-cannot-include-magic-method-%s:

Enum %s cannot include magic method %s
--------------------------------------
 
	.. meta::
		:description:
			Enum %s cannot include magic method %s: Some magic methods are not allowed in an enumeration.

		:og:type: article
		:og:title: Enum %s cannot include magic method %s
		:og:description: Some magic methods are not allowed in an enumeration
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/enum-%25s-cannot-include-magic-method-%25s.html

Description
___________
 
Some magic methods are not allowed in an enumeration. ``__get``, ``__set``, ``__isset``, ``__unset``, ``__construct``, ``__destruct``, ``__sleep``, ``__wakeup``, ``__serialize``, ``__unserialize``, ``__toString``, ``__set_state``, ``__clone`` and  ``__debugInfo``.

This also means that some other magic methods are allowed : ``__call``, ``__callStatic`` and ``__invoke``.

Example
_______

.. code-block:: php

   <?php
   
   enum e {
       function __get($a) {}
   }
   
   ?>


Literal Examples
****************
+ Enum e cannot include magic method __get
+ Enum e cannot include magic method __set
+ Enum e cannot include magic method __destruct

Solutions
_________

+ Remove the magic method from the enumeration.
+ Turn the enumeration into a class.

See Also
________

+ `Enum RFC <https://wiki.php.net/rfc/enumerations#magic_read-methods>`_
