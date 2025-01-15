.. _method-%s::__tostring()-must-not-throw-an-exception,-caught-%s:-%s:

Method %s::__toString() must not throw an exception, caught %s: %s
------------------------------------------------------------------
 
	.. meta::
		:description:
			Method %s::__toString() must not throw an exception, caught %s: %s: Until PHP 8.

		:og:type: article
		:og:title: Method %s::__toString() must not throw an exception, caught %s: %s
		:og:description: Until PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A__tostring%28%29-must-not-throw-an-exception%2C-caught-%25s%3A-%25s.html

Description
___________
 
Until PHP 8.0, ``__toString`` could not throw exception, and would end up with this error. In PHP 8.0, it is now possible.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __toString() {
           throw new \Exception('error');
       }
       
       function foo() {
           throw new \Exception('error');
       }
       
   }
   
   ?>


Literal Examples
****************
+ Method X::__toString() must not throw an exception, caught Exception: error

Solutions
_________

+ Upgrade to PHP 8.0.
+ Store the error in another property, and check the property in another method, after the call to ``__toString``.
