.. _use-of-"self"-in-callables-is-deprecated:

Use of "self" in callables is deprecated
----------------------------------------
 
	.. meta::
		:description:
			Use of "self" in callables is deprecated: Since PHP 8.

		:og:type: article
		:og:title: Use of &quot;self&quot; in callables is deprecated
		:og:description: Since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/use-of-%5C%22self%5C%22-in-callables-is-deprecated.html

Description
___________
 
Since PHP 8.2, it is not possible anymore to use ``self`` as a string, when creating a callable. ``self`` is a keyword with contextual meaning. Then, it has little meaning as a string and leads to confusion.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       static function foo() {
           echo __METHOD__;
       }
   
       static function test() {
           call_user_func(array('self','foo'));
       }
   }
   
   X::test();
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Use ``self::class`` to make this class name non-ambiguous.
+ Use another way to create a closure for the method, such as ``self::foo(...)``.

Related Error Messages
______________________

+ :ref:`use-of-\"parent\"-in-callables-is-deprecated`
+ :ref:`use-of-\"static\"-in-callables-is-deprecated`

See Also
________

+ `PHP RFC: Deprecate partially supported callables <https://wiki.php.net/rfc/deprecate_partially_supported_callables>`_
