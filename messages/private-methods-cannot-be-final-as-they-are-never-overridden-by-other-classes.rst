.. _private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes:

Private methods cannot be final as they are never overridden by other classes
-----------------------------------------------------------------------------
 
	.. meta::
		:description:
			Private methods cannot be final as they are never overridden by other classes: Final methods are only available in the class where they are defined.

		:og:type: article
		:og:title: Private methods cannot be final as they are never overridden by other classes
		:og:description: Final methods are only available in the class where they are defined
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html

Description
___________
 
Final methods are only available in the class where they are defined. If such a method is defined in one of the child class, it is considered a distinct method. As such, the final keyword doesn't apply, and even is misleading.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	private final function foo() {}
   }
   
   ?>

Solutions
_________

+ Remove the final keyword in the method definition.
+ Change the visibility to protected to public.
