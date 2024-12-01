.. _class-"%s"-not-found:

Class "%s" not found
--------------------
 
	.. meta::
		:description:
			Class "%s" not found: This error message is reported when the class could not be loaded, or when the name of the class is invalid.

		:og:type: article
		:og:title: Class &quot;%s&quot; not found
		:og:description: This error message is reported when the class could not be loaded, or when the name of the class is invalid
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%5C%22%25s%5C%22-not-found.html

Description
___________
 
This error message is reported when the class could not be loaded, or when the name of the class is invalid.

Example
_______

.. code-block:: php

   <?php
   
   // No x definition in the code
   new x; 
   
   // it is not possible to have a class with the name '4f'
   ('4f')::c;
   
   // it is not possible to have a class with the name 'class'
   ('class')::c;
   
   ?>


Literal Examples
****************
+ Class \"x\" not found
+ Class \"4f\" not found
+ Class \"class\" not found

Solutions
_________

+ Check spelling and namespace for that class.
+ Create the associated class.
+ Avoid using getInstance() on that attribute.

Related Error Messages
______________________

+ :ref:`attribute-class-\"%s\"-not-found`
+ :ref:`illegal-class-name`
