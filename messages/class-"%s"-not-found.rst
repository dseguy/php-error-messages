.. _class-"%s"-not-found:

Class "%s" not found
--------------------
 
.. meta::
	:description:
		Class "%s" not found: This error message is reported when the class could not be loaded, or when the name of the class is invalid.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class &quot;%s&quot; not found
	:og:description: This error message is reported when the class could not be loaded, or when the name of the class is invalid
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%5C%22%25s%5C%22-not-found.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class "%s" not found
	:twitter:description: Class "%s" not found: This error message is reported when the class could not be loaded, or when the name of the class is invalid
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error message is reported when the class could not be loaded, or when the name of the class is invalid.

Example
_______

.. code-block:: php

   <?php
   
   // No x definition in the code
   new X; 
   
   // it is not possible to have a class with the name '4f'
   ('4f')::c;
   
   // it is not possible to have a class with the name 'class'
   ('class')::c;
   
   // it is not possible to have static, self or parent in a string to call a method
   static::foo();
   
   ?>


Literal Examples
****************
+ Class \"x\" not found
+ Class \"4f\" not found
+ Class \"class\" not found

Solutions
_________

+ Check spelling and namespace for that class.
+ Create the required class.
+ Check if the class is defined in an extension, and the extension is included in the current PHP engine.
+ Check if the class is defined in a dependency, and the dependency is included in the current composer.json.
+ Avoid using getInstance() on that attribute.
+ Do not use static, parent or self in a string to call a method statically.

Related Error Messages
______________________

+ :ref:`attribute-class-\"%s\"-not-found`
+ :ref:`illegal-class-name`
