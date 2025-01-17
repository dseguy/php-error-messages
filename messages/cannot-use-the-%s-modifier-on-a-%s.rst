.. _cannot-use-the-%s-modifier-on-a-%s:

Cannot use the %s modifier on a %s
----------------------------------
 
.. meta::
	:description:
		Cannot use the %s modifier on a %s: This is a generic error message for cases where a keyword cannot be used with a class structure.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use the %s modifier on a %s
	:og:description: This is a generic error message for cases where a keyword cannot be used with a class structure
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-%25s-modifier-on-a-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use the %s modifier on a %s
	:twitter:description: Cannot use the %s modifier on a %s: This is a generic error message for cases where a keyword cannot be used with a class structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This is a generic error message for cases where a keyword cannot be used with a class structure. For example, a class constant cannot be abstract or static.

``final`` for class constant was also unavailable in PHP 8.0, and it is now a feature.


Example
_______

.. code-block:: php

   <?php
   
   class X {
       private final const A = 1;
       private abstract const B = 1;
       private static const C = 1;
   }
   
   ?>


Literal Examples
****************
+ Cannot use the final modifier on a class constant
+ Cannot use the abstract modifier on a class constant
+ Cannot use the static modifier on a class constant

Solutions
_________

+ Remove the option from the class constant definition.
+ Upgrade to PHP 8.1 or later, for ``final`` on class constants.
