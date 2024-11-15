.. _the-(unset)-cast-is-deprecated:

The (unset) cast is deprecated
------------------------------
 
	.. meta::
		:description lang=en:
			The (unset) cast is deprecated: Removing a variable, a property or an array index with the cast operator (unset) is deprecated since PHP 7.

Description
___________
 
Removing a variable, a property or an array index with the cast operator (unset) is deprecated since PHP 7.4, and will be removed in PHP 8.0. It is recommnded to do it with the unset() function.

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


In more recent PHP versions, this error message is now :ref:`the-(unset)-cast-is-no-longer-supported`.
