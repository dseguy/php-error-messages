.. _calling-get_parent_class()-without-arguments-is-deprecated:

Calling get_parent_class() without arguments is deprecated
----------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Calling get_parent_class() without arguments is deprecated: Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8.

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
