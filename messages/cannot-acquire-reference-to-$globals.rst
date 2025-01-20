.. _cannot-acquire-reference-to-\$globals:

Cannot acquire reference to $GLOBALS
------------------------------------
 
.. meta::
	:description:
		Cannot acquire reference to $GLOBALS: It is not possible to create a reference to a the superglobal ``$GLOBALS``.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot acquire reference to $GLOBALS
	:og:description: It is not possible to create a reference to a the superglobal ``$GLOBALS``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-acquire-reference-to-%24globals.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot acquire reference to $GLOBALS
	:twitter:description: Cannot acquire reference to $GLOBALS: It is not possible to create a reference to a the superglobal ``$GLOBALS``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
It is not possible to create a reference to a the superglobal ``$GLOBALS``. The property is readonly and cannot be changed. On the other hand, references are never readonly, and provide read and write access to the data. PHP has no way to check that the reference is readonly. Hence, references on readonly properties are not allowed.

Example
_______

.. code-block:: php

   <?php
   
   // Cannot acquire reference to $GLOBALS
   $a = &$GLOBALS;
   
   ?>

Solutions
_________

+ Remove the readonly option on the property.
+ Remove the reference to the property.

Related Error Messages
______________________

+ :ref:`%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference`
