.. _trying-to-clone-an-uncloneable-object-of-class-%s:

Trying to clone an uncloneable object of class %s
-------------------------------------------------
 
	.. meta::
		:description:
			Trying to clone an uncloneable object of class %s: It is not possible to instantiate an enumeration, nor to clone its cases.

		:og:type: article
		:og:title: Trying to clone an uncloneable object of class %s
		:og:description: It is not possible to instantiate an enumeration, nor to clone its cases
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/trying-to-clone-an-uncloneable-object-of-class-%25s.html

Description
___________
 
It is not possible to instantiate an enumeration, nor to clone its cases. Reuse the case as is.

Example
_______

.. code-block:: php

   <?php
   
   enum e {
       case A;
   }
   
   clone e::A;
   
   ?>


Literal Examples
****************
+ Trying to clone an uncloneable object of class e

Solutions
_________

+ Use the case literally.
