.. _the-(unset)-cast-is-no-longer-supported:

The (unset) cast is no longer supported
---------------------------------------
 
	.. meta::
		:description:
			The (unset) cast is no longer supported: Removing a variable, a property or an array index with the cast operator (unset) was removed in PHP 8.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: The (unset) cast is no longer supported
		:og:description: Removing a variable, a property or an array index with the cast operator (unset) was removed in PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%28unset%29-cast-is-no-longer-supported.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The (unset) cast is no longer supported
	:twitter:description: The (unset) cast is no longer supported: Removing a variable, a property or an array index with the cast operator (unset) was removed in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
Removing a variable, a property or an array index with the cast operator (unset) was removed in PHP 8.0. It has to be done with the unset() function.

Example
_______

.. code-block:: php

   <?php
   
   (unset) $x;
   
   ?>

Solutions
_________

+ Use the unset() function to remove variables.
+ Assign null to the variable.


In previous PHP versions, this error message used to be :ref:`the-(unset)-cast-is-deprecated`.
