.. _cannot-instantiate-trait-%s:

Cannot instantiate trait %s
---------------------------
 
	.. meta::
		:description lang=en:
			Cannot instantiate trait %s: Traits cannot be instantiated directly.

Description
___________
 
Traits cannot be instantiated directly. They need to be ``used`` in a class, or another trait, which will also need to be used in a class.

Example
_______

.. code-block:: php

   <?php
   
   trait t {}
   
   //Cannot instantiate trait t
   new t();
   
   ?>


Literal Examples
****************
+ Cannot instantiate trait t

Solutions
_________

+ Use one of the class using that trait.
+ Rewrite the trait into an class.

Related Error Messages
______________________

+ :ref:`cannot-instantiate-enum-%s`
+ :ref:`cannot-instantiate-interface-%s`
