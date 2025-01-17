.. _accessing-static-trait-property-%s::\$%s-is-deprecated,-it-should-only-be-accessed-on-a-class-using-the-trait:

Accessing static trait property %s::$%s is deprecated, it should only be accessed on a class using the trait
------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Accessing static trait property %s::$%s is deprecated, it should only be accessed on a class using the trait: Traits should not be used as standalone structure, but rather as a part of a class.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Accessing static trait property %s::$%s is deprecated, it should only be accessed on a class using the trait
		:og:description: Traits should not be used as standalone structure, but rather as a part of a class
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/accessing-static-trait-property-%25s%3A%3A%24%25s-is-deprecated%2C-it-should-only-be-accessed-on-a-class-using-the-trait.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Accessing static trait property %s::$%s is deprecated, it should only be accessed on a class using the trait
		:twitter:description: Accessing static trait property %s::$%s is deprecated, it should only be accessed on a class using the trait: Traits should not be used as standalone structure, but rather as a part of a class
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Traits should not be used as standalone structure, but rather as a part of a class. Even for class agnostic structures, such as constants or static properties, they should be accessed via any class that uses them.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
   	public static $property = 1;
   }
   
   echo T::$property;
   T::$property = 2;
   
   ?>


Literal Examples
****************
+ Accessing static trait property T::$property is deprecated, it should only be accessed on a class using the trait

Solutions
_________

+ Find a class that use the trait, and then, access the static property from there.
+ Create a class that only use the trait, and use it. An anonymous class would do.
+ Turn the trait into a class.

Related Error Messages
______________________

+ :ref:`cannot-access-trait-constant-%s::%s-directly`
