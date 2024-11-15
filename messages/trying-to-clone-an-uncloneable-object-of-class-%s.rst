.. _trying-to-clone-an-uncloneable-object-of-class-%s:

Trying to clone an uncloneable object of class %s
-------------------------------------------------
 
	.. meta::
		:description lang=en:
			Trying to clone an uncloneable object of class %s: It is not possible to instantiate an enumeration, nor to clone its cases.

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
