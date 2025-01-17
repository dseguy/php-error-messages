.. _cannot-be-a-class-constant:

cannot be a class constant
--------------------------
 
.. meta::
	:description:
		cannot be a class constant: Class constants must be defined in classes, enums, traits or interfaces.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: cannot be a class constant
	:og:description: Class constants must be defined in classes, enums, traits or interfaces
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-be-a-class-constant.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: cannot be a class constant
	:twitter:description: cannot be a class constant: Class constants must be defined in classes, enums, traits or interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Class constants must be defined in classes, enums, traits or interfaces. They cannot be created dynamically, nor with the define() function.

Example
_______

.. code-block:: php

   <?php
   define('foo::bar', 1);
   define('::', 1);
   ?>

Solutions
_________

+ Define the class constant in a class.
+ Define the class constant in a trait.
+ Define the class constant in a interface.
+ Define the class constant in a enum.
+ Define the global constant, and use it as a value for the class constant.
