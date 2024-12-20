.. _cannot-re-assign-auto-global-variable-%s:

Cannot re-assign auto-global variable %s
----------------------------------------
 
	.. meta::
		:description:
			Cannot re-assign auto-global variable %s: It is not possible to use one of the superglobal variable names as argument of a method: such code hides the assignation that happens at call time, which will interfere with the ``$_POST`` variable being a global.

		:og:type: article
		:og:title: Cannot re-assign auto-global variable %s
		:og:description: It is not possible to use one of the superglobal variable names as argument of a method: such code hides the assignation that happens at call time, which will interfere with the ``$_POST`` variable being a global
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-re-assign-auto-global-variable-%25s.html

Description
___________
 
It is not possible to use one of the superglobal variable names as argument of a method: such code hides the assignation that happens at call time, which will interfere with the ``$_POST`` variable being a global. Hence, such syntax is forbidden. 

The error is not emitted when the same superglobal variables are used as variables, as it may be legit code.

This applies to all PHP superglobal, such as ``$_ENV``, ``$GLOBALS``, or ``$_POST``. See the full list in annex.


Example
_______

.. code-block:: php

   <?php
   
   function foo($_POST) {
   
   }
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Use a name of the parameter that is not a superglobal.

Related Error Messages
______________________

+ :ref:`cannot-re-assign-$this`
