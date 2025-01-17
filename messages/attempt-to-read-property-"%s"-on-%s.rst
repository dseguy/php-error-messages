.. _attempt-to-read-property-"%s"-on-%s:

Attempt to read property "%s" on %s
-----------------------------------
 
.. meta::
	:description:
		Attempt to read property "%s" on %s: This error reports that a non-object was used with an object syntax.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Attempt to read property &quot;%s&quot; on %s
	:og:description: This error reports that a non-object was used with an object syntax
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/attempt-to-read-property-%5C%22%25s%5C%22-on-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attempt to read property "%s" on %s
	:twitter:description: Attempt to read property "%s" on %s: This error reports that a non-object was used with an object syntax
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error reports that a non-object was used with an object syntax. Non-objects are integers, floats, strings, null, booleans, etc.

This is a warning, so PHP will continue execution, using ``null`` as a result of this operation.


Example
_______

.. code-block:: php

   <?php
   
   $integer = 1;
   var_dump($integer->a);
   
   $array = [3];
   var_dump($array?->a);
   
   ?>


Literal Examples
****************
+ Attempt to read property "a" on int
+ Attempt to read property "a" on array
+ Attempt to read property "a" on float
+ Attempt to read property "a" on string
+ Attempt to read property "a" on bool

Solutions
_________

+ Remove the use of the property.
+ Add a type to the underlying variable, to ensure it is an object.
+ Check the variable is an object.
