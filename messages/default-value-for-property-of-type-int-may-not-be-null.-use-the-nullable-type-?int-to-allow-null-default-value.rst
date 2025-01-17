.. _default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value:

Default value for property of type int may not be null. Use the nullable type ?int to allow null default value
--------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Default value for property of type int may not be null. Use the nullable type ?int to allow null default value: When an argument is typed, and has a null default value, PHP makes it automagically nullable.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Default value for property of type int may not be null. Use the nullable type ?int to allow null default value
	:og:description: When an argument is typed, and has a null default value, PHP makes it automagically nullable
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-%3Fint-to-allow-null-default-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Default value for property of type int may not be null. Use the nullable type ?int to allow null default value
	:twitter:description: Default value for property of type int may not be null. Use the nullable type ?int to allow null default value: When an argument is typed, and has a null default value, PHP makes it automagically nullable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
When an argument is typed, and has a null default value, PHP makes it automagically nullable. That is not the case for properties, which yields this error.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private int $i = null;
   }
   
   function foo(int $i = null) { }
   
   ?>

Solutions
_________

+ Add the nullable type to the type definition.
+ Use another default value, within the current type domain.

Related Error Messages
______________________

+ :ref:`%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead`
