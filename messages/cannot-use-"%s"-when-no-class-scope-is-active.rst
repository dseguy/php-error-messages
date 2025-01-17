.. _cannot-use-"%s"-when-no-class-scope-is-active:

Cannot use "%s" when no class scope is active
---------------------------------------------
 
.. meta::
	:description:
		Cannot use "%s" when no class scope is active: `self``, ``static`` and ```parent`` refers to the classes, relative to the current one.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &quot;%s&quot; when no class scope is active
	:og:description: `self``, ``static`` and ```parent`` refers to the classes, relative to the current one
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%22%25s%22-when-no-class-scope-is-active.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use "%s" when no class scope is active
	:twitter:description: Cannot use "%s" when no class scope is active: `self``, ``static`` and ```parent`` refers to the classes, relative to the current one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
`self``, ``static`` and ```parent`` refers to the classes, relative to the current one. As such, they can only be used inside a class or a trait.

Example
_______

.. code-block:: php

   <?php
   
   static::x;
   
   ?>

Solutions
_________

+ Move the code inside a method, in a trait or a class.
+ Use the full name of the class that should be used.
