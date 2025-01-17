.. _cannot-instantiate-interface-%s:

Cannot instantiate interface %s
-------------------------------
 
.. meta::
	:description:
		Cannot instantiate interface %s: An interface represents an abstract class, and cannot be instantiated alone.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot instantiate interface %s
		:og:description: An interface represents an abstract class, and cannot be instantiated alone
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-instantiate-interface-%25s.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Cannot instantiate interface %s
		:twitter:description: Cannot instantiate interface %s: An interface represents an abstract class, and cannot be instantiated alone
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
An interface represents an abstract class, and cannot be instantiated alone. For that, the interface must be implemented by a class, aka, it must be specified with the ``implements`` keyword.

Example
_______

.. code-block:: php

   <?php
   
   interface I {}
   
   //Cannot instantiate interface I
   new I();
   
   class XI implements I {
   }
   
   new XI(); 
   
   ?>


Literal Examples
****************
+ Cannot instantiate interface i

Solutions
_________

+ Implement the interface with a class and use that class.

Related Error Messages
______________________

+ :ref:`cannot-instantiate-trait-%s`
+ :ref:`cannot-instantiate-enum-%s`
