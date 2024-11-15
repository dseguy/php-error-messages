.. _method-%s::%s()-cannot-be-static:

Method %s::%s() cannot be static
--------------------------------
 
	.. meta::
		:description:
			Method %s::%s() cannot be static: Some PHP special methods cannot be static.

		:og:type: article
		:og:title: Method %s::%s() cannot be static
		:og:description: Some PHP special methods cannot be static
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s%28%29-cannot-be-static.html

Description
___________
 
Some PHP special methods cannot be static. This is the case of all the PHP magic methods, such as the constructor ``__construct``, the destructor ``__destruct``, and all the others: ``__call()``, ``__callStatic()``, ``__get()``, ``__set()``, ``__isset()``, ``__unset()``, ``__sleep()``, ``__wakeup()``, ``__serialize()``, ``__unserialize()``, ``__toString()``, ``__invoke()``, ``__set_state()``, ``__clone()`` and ``__debugInfo()``.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	static function __construct() {}
   }
   
   ?>


Literal Examples
****************
+ Method x::__construct() cannot be static

Solutions
_________

+ Make a static method that can call the method that would be static. Be aware, this will require the building of an object, as a static method does not set ``$this``.
