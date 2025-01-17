.. _trying-to-clone-an-uncloneable-object-of-class-%s:

Trying to clone an uncloneable object of class %s
-------------------------------------------------
 
.. meta::
	:description:
		Trying to clone an uncloneable object of class %s: It is not possible to instantiate an enumeration, nor to clone its cases.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Trying to clone an uncloneable object of class %s
	:og:description: It is not possible to instantiate an enumeration, nor to clone its cases
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/trying-to-clone-an-uncloneable-object-of-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Trying to clone an uncloneable object of class %s
	:twitter:description: Trying to clone an uncloneable object of class %s: It is not possible to instantiate an enumeration, nor to clone its cases
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
It is not possible to instantiate an enumeration, nor to clone its cases. Reuse the case as is.

Example
_______

.. code-block:: php

   <?php
   
   enum E {
       case A;
   }
   
   clone E::A;
   
   ?>


Literal Examples
****************
+ Trying to clone an uncloneable object of class e

Solutions
_________

+ Use the case literally.
