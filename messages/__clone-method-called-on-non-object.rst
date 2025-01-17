.. ___clone-method-called-on-non-object:

__clone method called on non-object
-----------------------------------
 
	.. meta::
		:description:
			__clone method called on non-object: This error signals an attempt at cloning something that is not an object.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: __clone method called on non-object
		:og:description: This error signals an attempt at cloning something that is not an object
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/__clone-method-called-on-non-object.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __clone method called on non-object
	:twitter:description: __clone method called on non-object: This error signals an attempt at cloning something that is not an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
This error signals an attempt at cloning something that is not an object. Indeed, anything but an object triggers this error: boolean, array, string, etc.

Note that it is possible to clone a constant since PHP 8.1, so it is legit to use clone on a constant. 

Example
_______

.. code-block:: php

   <?php
   
   $a = clone array();
   
   $b = null; 
   clone null;
   
   const C = new Stdclass();
   clone C;
   
   ?>

Solutions
_________

+ Check the data before cloning it, with is_object() or instanceof.
