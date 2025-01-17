.. _property-%s::\$%s-cannot-have-type-%s:

Property %s::$%s cannot have type %s
------------------------------------
 
	.. meta::
		:description:
			Property %s::$%s cannot have type %s: Some native PHP types are not allowed with a property.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Property %s::$%s cannot have type %s
		:og:description: Some native PHP types are not allowed with a property
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-%25s%3A%3A%24%25s-cannot-have-type-%25s.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property %s::$%s cannot have type %s
	:twitter:description: Property %s::$%s cannot have type %s: Some native PHP types are not allowed with a property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
Some native PHP types are not allowed with a property. This is the case of void, never and callable. Any mention of them, alone or in a compsed type generates this error. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public callable|int $property = 1;
   }
   
   ?>


Literal Examples
****************
+ Property x::$p cannot have type callable

Solutions
_________

+ Remove any illegal type from the definition of the property.
+ Remove all types from the definition of the property.

Related Error Messages
______________________

+ :ref:`class-constant-%s::%s-cannot-have-type-%s`
