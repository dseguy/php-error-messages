.. _multiple-access-type-modifiers-are-not-allowed:

Multiple access type modifiers are not allowed
----------------------------------------------
 
.. meta::
	:description:
		Multiple access type modifiers are not allowed: Only one visibility option is necessary to set the visibility of a property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Multiple access type modifiers are not allowed
	:og:description: Only one visibility option is necessary to set the visibility of a property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/multiple-access-type-modifiers-are-not-allowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiple access type modifiers are not allowed
	:twitter:description: Multiple access type modifiers are not allowed: Only one visibility option is necessary to set the visibility of a property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Only one visibility option is necessary to set the visibility of a property. Two is overkill or could be impossible, so PHP reports it.

This message applies to private, protected and public options.

This message appears when compiling PHP 8.4+ code, with asymmetric visibility, against PHP 8.3 or older. In that case, ``protected(set)`` is not recognized as a token, and only the ``protected`` part is used, leading to the error.

There are similar messages for multiple readonly, or multiple static.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private private static A $b;
   }
   
   class Y
   {
       public protected(set) string $name;
   }
   
   ?>

Solutions
_________

+ Drop the extra visibility, and keep only one.
+ Compile with PHP 8.4 and more recent.
+ Remove asymmetric visibility.

Related Error Messages
______________________

+ :ref:`multiple-static-modifiers-are-not-allowed`
+ :ref:`multiple-readonly-modifiers-are-not-allowed`
