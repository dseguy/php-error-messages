.. _never-cannot-be-used-as-a-parameter-type:

never cannot be used as a parameter type
----------------------------------------
 
.. meta::
	:description:
		never cannot be used as a parameter type: Never is a PHP return type, that is used to indicate that a method will not return a value.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: never cannot be used as a parameter type
	:og:description: Never is a PHP return type, that is used to indicate that a method will not return a value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/never-cannot-be-used-as-a-parameter-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: never cannot be used as a parameter type
	:twitter:description: never cannot be used as a parameter type: Never is a PHP return type, that is used to indicate that a method will not return a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Never is a PHP return type, that is used to indicate that a method will not return a value. As such, it makes no sense to use with a parameter, as a parameter cannot return any value. Hence, the never type cannot be used with a parameter.

Example
_______

.. code-block:: php

   <?php
   
   function foo(never $n) {}
   
   ?>

Solutions
_________

+ Remove the never type.
+ Change the never type to another type.
