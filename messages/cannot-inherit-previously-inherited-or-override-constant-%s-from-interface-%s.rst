.. _cannot-inherit-previously-inherited-or-override-constant-%s-from-interface-%s:

Cannot inherit previously-inherited or override constant %s from interface %s
-----------------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot inherit previously-inherited or override constant %s from interface %s: Until PHP 8.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot inherit previously-inherited or override constant %s from interface %s
		:og:description: Until PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-inherit-previously-inherited-or-override-constant-%25s-from-interface-%25s.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Cannot inherit previously-inherited or override constant %s from interface %s
		:twitter:description: Cannot inherit previously-inherited or override constant %s from interface %s: Until PHP 8
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Until PHP 8.1, it was not possible to override a constant when it was defined in an interface, even with the same definition. 

Example
_______

.. code-block:: php

   <?php
   
   interface I {
       const A = 1;
   }
   
   class X implements I {
       const A = 2;
   }
   
   ?>


Literal Examples
****************
+ Cannot inherit previously-inherited or override constant x from interface i

Solutions
_________

+ Remove the constant from the class.
+ Remove the constant from the interface.
+ Move to PHP 8.1 or more recent.
