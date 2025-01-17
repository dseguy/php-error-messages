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

There are similar messages for multiple readonly, or multiple static.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private private static A $b;
   }
   
   ?>

Solutions
_________

+ Drop the extra visibility, and keep only one.

Related Error Messages
______________________

+ :ref:`multiple-static-modifiers-are-not-allowed`
+ :ref:`multiple-readonly-modifiers-are-not-allowed`
