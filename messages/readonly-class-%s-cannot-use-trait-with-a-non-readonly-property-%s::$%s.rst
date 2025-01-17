.. _readonly-class-%s-cannot-use-trait-with-a-non-readonly-property-%s::\$%s:

Readonly class %s cannot use trait with a non-readonly property %s::$%s
-----------------------------------------------------------------------
 
	.. meta::
		:description:
			Readonly class %s cannot use trait with a non-readonly property %s::$%s: When a class is readonly, then even the properties added to the class from a trait have to be readonly.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Readonly class %s cannot use trait with a non-readonly property %s::$%s
		:og:description: When a class is readonly, then even the properties added to the class from a trait have to be readonly
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/readonly-class-%25s-cannot-use-trait-with-a-non-readonly-property-%25s%3A%3A%24%25s.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readonly class %s cannot use trait with a non-readonly property %s::$%s
	:twitter:description: Readonly class %s cannot use trait with a non-readonly property %s::$%s: When a class is readonly, then even the properties added to the class from a trait have to be readonly
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
When a class is readonly, then even the properties added to the class from a trait have to be readonly. Since a trait cannot be readonly, like a class, then each of the properties in the trait, have to be readonly.

Also, note that PHP checks all the traits and the traits of the traits, for readonly properties.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
   	private $property;
   }
   
   readonly class X {
   	use T;
   }
   
   ?>


Literal Examples
****************
+ Readonly class x cannot use trait with a non-readonly property t::$a

Solutions
_________

+ Remove the readonly on the class and apply to all each property in the class.
+ Make each of the property in the trait, and its dependencies, readonly.
