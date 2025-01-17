.. _undefined-class-constant-'%s\:\:%s':

Undefined class constant '%s::%s'
---------------------------------
 
	.. meta::
		:description:
			Undefined class constant '%s::%s': The requested class constant doesn&#039;t exist.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Undefined class constant &#039;%s::%s&#039;
		:og:description: The requested class constant doesn&#039;t exist
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-class-constant-%27%25s%3A%3A%25s%27.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined class constant '%s::%s'
	:twitter:description: Undefined class constant '%s::%s': The requested class constant doesn't exist
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
The requested class constant doesn't exist.

In the case of an enumeration, this error message is also displayed for the cases: they do have the same syntax, so it is not possible to know if it is a constant or a case.


Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   echo X::Y; 
   
   enum E { case A;}
   
   echo E::B;
   
   ?>


Literal Examples
****************
+ Undefined class constant 'x::Y'
+ Undefined class constant 'e::B'

Solutions
_________

+ Find the actual name of the requested class constant.
+ Find the actual class of the requested class constant.
+ Define the class constant in the class, or its traits, interfaces or parents.


In more recent PHP versions, this error message is now :ref:`undefined-constant-%s::%s`.
