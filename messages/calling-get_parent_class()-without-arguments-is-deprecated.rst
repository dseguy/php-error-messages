.. _calling-get_parent_class()-without-arguments-is-deprecated:

Calling get_parent_class() without arguments is deprecated
----------------------------------------------------------
 
	.. meta::
		:description:
			Calling get_parent_class() without arguments is deprecated: Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8.

		:og:type: article
		:og:title: Calling get_parent_class() without arguments is deprecated
		:og:description: Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/calling-get_parent_class%28%29-without-arguments-is-deprecated.html

Description
___________
 
Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8.3. Using the null value defaulted to the current class, so it is possible to use ``$this`` instead.

Example
_______

.. code-block:: php

   <?php
   
   get_class();
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Use ``$this`` instead of no argument.
