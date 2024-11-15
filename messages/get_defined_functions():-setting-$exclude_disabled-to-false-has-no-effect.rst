.. _get_defined_functions():-setting-\$exclude_disabled-to-false-has-no-effect:

get_defined_functions(): Setting $exclude_disabled to false has no effect
-------------------------------------------------------------------------
 
	.. meta::
		:description:
			get_defined_functions(): Setting $exclude_disabled to false has no effect: The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8.

		:og:type: article
		:og:title: get_defined_functions(): Setting $exclude_disabled to false has no effect
		:og:description: The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/get_defined_functions%28%29%3A-setting-%24exclude_disabled-to-false-has-no-effect.html

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
