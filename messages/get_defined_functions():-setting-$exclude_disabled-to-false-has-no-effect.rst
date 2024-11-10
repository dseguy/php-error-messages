.. _get_defined_functions():-setting-\$exclude_disabled-to-false-has-no-effect:

get_defined_functions(): Setting $exclude_disabled to false has no effect
-------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			get_defined_functions(): Setting $exclude_disabled to false has no effect: The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8.

Description
___________
 
The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8.0 and will disappear in PHP 9.

Example
_______

.. code-block:: php

   <?php
   
   $list = get_defined_functions(false); 
   
   ?>

Solutions
_________

+ Remove all parameter usage when calling get_defined_functions(), and fetch the list of disabled functions another way.
+ Check that the parameter is never false before usage.
