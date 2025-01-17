.. _cannot-use-"%s"-when-no-class-scope-is-active:

Cannot use "%s" when no class scope is active
---------------------------------------------
 
	.. meta::
		:description:
			Cannot use "%s" when no class scope is active: `self``, ``static`` and ```parent`` refers to the classes, relative to the current one.

		:og:type: article
		:og:title: Cannot use &quot;%s&quot; when no class scope is active
		:og:description: `self``, ``static`` and ```parent`` refers to the classes, relative to the current one
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%22%25s%22-when-no-class-scope-is-active.html

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
