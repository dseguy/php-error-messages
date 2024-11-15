.. _cannot-instantiate-trait-t:

Cannot instantiate trait t
--------------------------
 
	.. meta::
		:description:
			Cannot instantiate trait t: A trait represents a part of a class, and cannot be instantiated alone.

		:og:type: article
		:og:title: Cannot instantiate trait t
		:og:description: A trait represents a part of a class, and cannot be instantiated alone
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-instantiate-trait-t.html

Description
___________
 
A trait represents a part of a class, and cannot be instantiated alone. For that, the trait must be ``used`` in a class, aka, it must be specified with the ``use`` keyword inside a class. 

In fact, when a class only use one trait, it is the closest syntax to instanciate a trait. 

Example
_______

.. code-block:: php

   <?php
   
   trait t {}
   
   //Cannot instantiate trait t
   new t();
   
   class xt {
   	use t;
   }
   
   new xt(); 
   
   ?>

Solutions
_________

+ Use the trait in a class.
