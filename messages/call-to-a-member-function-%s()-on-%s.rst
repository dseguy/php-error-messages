.. _call-to-a-member-function-%s()-on-%s:

Call to a member function %s() on %s
------------------------------------
 
.. meta::
	:description:
		Call to a member function %s() on %s: This error happens when the object syntax is used on a string.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to a member function %s() on %s
	:og:description: This error happens when the object syntax is used on a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-a-member-function-%25s%28%29-on-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to a member function %s() on %s
	:twitter:description: Call to a member function %s() on %s: This error happens when the object syntax is used on a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error happens when the object syntax is used on a string. A string is a scalar type, and cannot hold method, properties nor constants. The type of the variable should be checked before usage. This also happens with the nullsafe operator, which only protects against NULL used as an object.

Example
_______

.. code-block:: php

   <?php
   
   'a'?->foo();
   
   $string = 'abc';
   $string->foo();
   
   ?>


Literal Examples
****************
+ Call to a member function foo() on string
+ Call to a member function foo() on int
+ Call to a member function foo() on null

Solutions
_________

+ Check the type of the object before usage.
