.. _access-to-undeclared-static-property-%s::\$%s:

Access to undeclared static property %s::$%s
--------------------------------------------
 
	.. meta::
		:description:
			Access to undeclared static property %s::$%s: This error is reported when reading an undefined static property.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Access to undeclared static property %s::$%s
		:og:description: This error is reported when reading an undefined static property
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/access-to-undeclared-static-property-%25s%3A%3A%24%25s.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Access to undeclared static property %s::$%s
	:twitter:description: Access to undeclared static property %s::$%s: This error is reported when reading an undefined static property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
This error is reported when reading an undefined static property. The property must be defined before usage, or it yields a Fatal error.

This error is related to static properties: a different error is emitted for non-static properties.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public static $a = 1;
   }
   
   $x = new X;
   echo X::$a; // OK
   echo X::$b;
   
   $name = 'C';
   echo X::${$c}; // dynamic properties
   
   ?>


Literal Examples
****************
+ Access to undeclared static property X::$staticProperty

Solutions
_________

+ Define the static property in the requested class.
+ Fix the name of the property on that class.
+ Fix the name of the class of the property.
+ Use a non-static property to handle this situation.
+ Use property_exists() or isset() to check if the property exists before using it.
+ Check if the dynamic name of the property is a string, before usage.

Related Error Messages
______________________

+ :ref:`undefined-property-%s::$%s`
