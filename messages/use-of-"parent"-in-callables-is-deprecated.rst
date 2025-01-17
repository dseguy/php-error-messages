.. _use-of-"parent"-in-callables-is-deprecated:

Use of "parent" in callables is deprecated
------------------------------------------
 
.. meta::
	:description:
		Use of "parent" in callables is deprecated: Since PHP 8.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Use of &quot;parent&quot; in callables is deprecated
		:og:description: Since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/use-of-%5C%22parent%5C%22-in-callables-is-deprecated.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Use of "parent" in callables is deprecated
		:twitter:description: Use of "parent" in callables is deprecated: Since PHP 8
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Since PHP 8.2, it is not possible anymore to use ``parent`` as a string, when creating a callable. ``parent`` is a keyword with contextual meaning. Then, it has little meaning as a string and leads to confusion.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       static function foo() {
           echo __METHOD__;
       }
   
       static function test() {
           call_user_func(array('parent','foo'));
       }
   }
   
   X::test();
   
   ?>

Solutions
_________

+ Use ``parent::class`` to make this class name non-ambiguous.
+ Use another way to create a closure for the method, such as ``parent::foo(...)``.

Related Error Messages
______________________

+ :ref:`use-of-\"self\"-in-callables-is-deprecated`
+ :ref:`use-of-\"static\"-in-callables-is-deprecated`

See Also
________

+ `PHP RFC: Deprecate partially supported callables <https://wiki.php.net/rfc/deprecate_partially_supported_callables>`_
