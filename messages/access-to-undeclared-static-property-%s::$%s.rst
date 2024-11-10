.. _access-to-undeclared-static-property-%s::\$%s:

Access to undeclared static property %s::$%s
--------------------------------------------
 
	.. meta::
		:description lang=en:
			Access to undeclared static property %s::$%s: This error is reported when reading an undefined static property.

Description
___________
 
This error is reported when reading an undefined static property. The property must be defined before usage, or it yields a Fatal error.

This error is related to static properties: a different error is emitted for properties.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public static $a = 1;
   }
   
   $x = new x;
   echo X::$a; // OK
   echo X::$b;
   
   ?>

Solutions
_________

+ Define the static property in the requested class.
+ Fix the name of the property on that class.
+ Fix the name of the class of the property.
+ Use a property to handle this situation.

Related Error Messages
______________________

+ :ref:`undefined-property:-%s::$%s`
