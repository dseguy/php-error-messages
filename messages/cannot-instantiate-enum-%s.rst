.. _cannot-instantiate-enum-%s:

Cannot instantiate enum %s
--------------------------
 
	.. meta::
		:description:
			Cannot instantiate enum %s: Enumeration cannot be instantiated directly.

		:og:type: article
		:og:title: Cannot instantiate enum %s
		:og:description: Enumeration cannot be instantiated directly
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-instantiate-enum-%25s.html

Description
___________
 
Enumeration cannot be instantiated directly. 

An enumeration object is created automatically when reading one of its case.

Example
_______

.. code-block:: php

   <?php
   
   enum e {
   	case A;
   }
   
   //Cannot instantiate enum e
   new e();
   
   // e
   print get_class(e::A);
   
   ?>


Literal Examples
****************
+ Cannot instantiate enum e

Solutions
_________

+ Use one of the enumeration cases.

Related Error Messages
______________________

+ :ref:`cannot-instantiate-trait-%s`
+ :ref:`cannot-instantiate-interface-%s`
