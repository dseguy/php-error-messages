.. _creating-default-object-from-empty-value:

Creating default object from empty value
----------------------------------------
 
	.. meta::
		:description:
			Creating default object from empty value: This deprecation message is emitted in PHP 7.

		:og:type: article
		:og:title: Creating default object from empty value
		:og:description: This deprecation message is emitted in PHP 7
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/creating-default-object-from-empty-value.html

Description
___________
 
This deprecation message is emitted in PHP 7.x to signal that an object was created without instantiation. In the illustration code, ``$x`` does not exist before assigning it a property ``a``, and a value. The created object is ``stdClass``.

This error is specific to the creation of the variable: if ``$x`` was set with ``null``, a different message was emitted.


Example
_______

.. code-block:: php

   <?php
   
   $x->a = 1;
   
   ?>

Solutions
_________

+ Explicitly create the object before accessing its properties.
+ Cast an array to ``(object)``.


In more recent PHP versions, this error message is now :ref:`attempt-to-assign-property-"%s"-on-null`.

Changed Behavior
________________

This error may appear in different PHP versions `creatingObjectOnNull <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/creatingObjectOnNull.html>`_.
