.. _cannot-declare-variadic-promoted-property:

Cannot declare variadic promoted property
-----------------------------------------
 
.. meta::
	:description:
		Cannot declare variadic promoted property: Properties may be declared, as an parameter in a constructor.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot declare variadic promoted property
	:og:description: Properties may be declared, as an parameter in a constructor
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-variadic-promoted-property.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot declare variadic promoted property
	:twitter:description: Cannot declare variadic promoted property: Properties may be declared, as an parameter in a constructor
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Properties may be declared, as an parameter in a constructor. Then, they also act as an parameter, and a local variable.

Variadic option is a parameter only option, which pack all the remaning arguments in the final parameter. 

Variadic option makes no sense in a property definition, as only one value is stored there.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function __construct(
   		private string ...$x
   	) {}
   }
   
   ?>

Solutions
_________

+ Remove the property definition from the constructor: keep the argument use the variadic, and define the property in the traditional way.
+ Remove the variadic option.
