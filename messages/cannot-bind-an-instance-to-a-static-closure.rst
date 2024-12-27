.. _cannot-bind-an-instance-to-a-static-closure:

Cannot bind an instance to a static closure
-------------------------------------------
 
	.. meta::
		:description:
			Cannot bind an instance to a static closure: The ``Closure::bind()`` method gives the scope of execution of a closure.

		:og:type: article
		:og:title: Cannot bind an instance to a static closure
		:og:description: The ``Closure::bind()`` method gives the scope of execution of a closure
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-bind-an-instance-to-a-static-closure.html

Description
___________
 
The ``Closure::bind()`` method gives the scope of execution of a closure. And a static closure uses no scope, so the ``bind()`` method fails.

Example
_______

.. code-block:: php

   <?php
       $closure = static function () { return __METHOD__;};
   
       $closure->bindTo(new stdclass());
       $closure();
   
   ?>

Solutions
_________

+ Remove the static option on the closure.
+ Remove the call to ``bind()``.
