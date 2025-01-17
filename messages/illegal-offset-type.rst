.. _illegal-offset-type:

Illegal offset type
-------------------
 
	.. meta::
		:description:
			Illegal offset type: PHP only uses integers and strings as array index.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Illegal offset type
		:og:description: PHP only uses integers and strings as array index
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/illegal-offset-type.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Illegal offset type
	:twitter:description: Illegal offset type: PHP only uses integers and strings as array index
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
PHP only uses integers and strings as array index. While certain other types may be converted silently to those types, as ``null`` or ``boolean``, objects and arrays yield an illegal type for index.

This error is reported at compile time when PHP can detect the type then, otherwise, it is reported at execution time.


Example
_______

.. code-block:: php

   <?php
   
   $a = new Stdclass;
   
   $array = [$a => 2];
   
   $array[$a] = 1;
   
   $array[$array] = 3;
   
   ?>

Solutions
_________

+ Convert these types into a string or a integer first.
+ Cast these types into a string or a integer first.

Related Error Messages
______________________

+ :ref:`cannot-access-offset-of-type-%s-in-isset-or-empty`
+ :ref:`cannot-access-offset-of-type-%s-on-%s`
+ :ref:`illegal-offset-type-in-unset`
+ :ref:`illegal-offset-type-in-isset-or-empty`
