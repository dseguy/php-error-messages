.. _interface-"%s"-not-found:

Interface "%s" not found
------------------------
 
	.. meta::
		:description:
			Interface "%s" not found: This error message is reported when the interface could not be loaded, or when the name of the class is invalid.

		:og:type: article
		:og:title: Interface &quot;%s&quot; not found
		:og:description: This error message is reported when the interface could not be loaded, or when the name of the class is invalid
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/interface-%22%25s%22-not-found.html

Description
___________
 
This error message is reported when the interface could not be loaded, or when the name of the class is invalid.

Example
_______

.. code-block:: php

   <?php
   
   // it is not possible to have an interface with the name '4f'
   ('4f')::c;
   
   // it is not possible to have a class with the name 'interface'
   ('interface')::c;
   
   ?>


Literal Examples
****************
+ Interface \"4f\" not found
+ Interface \"interface\" not found

Solutions
_________

+ Check spelling and namespace for that interface.
+ Create the required interface.
+ Check if the interface is defined in an extension, and the extension is included in the current PHP engine.
+ Check if the interface is defined in a dependency, and the dependency is included in the current composer.json.
+ Do not use static, parent or self in a string to call a method statically.

Related Error Messages
______________________

+ :ref:`attribute-class-\"%s\"-not-found`
+ :ref:`illegal-class-name`
