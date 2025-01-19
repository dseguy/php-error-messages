.. _undefined-property-%s\:\:\$%s:

Undefined property %s::$%s
--------------------------
 
.. meta::
	:description:
		Undefined property %s::$%s: This error is reported when reading an undefined property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined property %s::$%s
	:og:description: This error is reported when reading an undefined property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined property %s::$%s
	:twitter:description: Undefined property %s::$%s: This error is reported when reading an undefined property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error is reported when reading an undefined property. The property must be defined before usage, or, in older PHP versions, the property must have been assigned.

This error is related to properties: a different error is emitted for static properties.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public $a = 1;
   }
   
   $x = new X;
   echo $x->a;
   echo $x->b;
   
   ?>


Literal Examples
****************
+ Undefined property x::$b

Solutions
_________

+ Define the property before using it.
+ Fix the name of the property, and replace it with an existing one.
+ Define the magic property method __get() to make any property available.

Related Error Messages
______________________

+ :ref:`access-to-undeclared-static-property-%s::$%s`
+ :ref:`property-%s-does-not-exist`
+ :ref:`property-%s::$%s-does-not-exist`
