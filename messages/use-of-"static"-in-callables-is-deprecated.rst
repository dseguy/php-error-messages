.. _use-of-"static"-in-callables-is-deprecated:

Use of "static" in callables is deprecated
------------------------------------------
 
	.. meta::
		:description:
			Use of "static" in callables is deprecated: Since PHP 8.

		:og:type: article
		:og:title: Use of &quot;static&quot; in callables is deprecated
		:og:description: Since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/use-of-%5C%22static%5C%22-in-callables-is-deprecated.html

Description
___________
 
Since PHP 8.2, it is not possible anymore to use ``static`` as a string, when creating a callable. ``static`` is a keyword with contextual meaning. Then, it has little meaning as a string and leads to confusion.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       static function foo() {
           echo __METHOD__;
       }
   
       static function test() {
           call_user_func(array('static','foo'));
       }
   }
   
   X::test();
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Use ``static::class`` to make this class name non-ambiguous.
+ Use another way to create a closure for the method, such as ``static::foo(...)``.

Related Error Messages
______________________

+ :ref:`use-of-\"self\"-in-callables-is-deprecated`
+ :ref:`use-of-\"parent\"-in-callables-is-deprecated`

See Also
________

+ `PHP RFC: Deprecate partially supported callables <https://wiki.php.net/rfc/deprecate_partially_supported_callables>`_
