.. _cannot-access-offset-of-type-%s-in-isset-or-empty:

Cannot access offset of type %s in isset or empty
-------------------------------------------------
 
	.. meta::
		:description:
			Cannot access offset of type %s in isset or empty: In an array notation, the offset may be a variable, or any container.

		:og:type: article
		:og:title: Cannot access offset of type %s in isset or empty
		:og:description: In an array notation, the offset may be a variable, or any container
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-offset-of-type-%25s-in-isset-or-empty.html

Description
___________
 
In an array notation, the offset may be a variable, or any container. Yet, it must be a string or an integer; and when applied to an string, it must be an integer.

This error is reported when a value which type is not cast to integer (such as ``null``, ``boolean``, ``float``) or string is used. Here, it is an object. 

It is also a specific message, emitted when the error happens as an argument of ``isset`` or ``empty``. Both function have an error suppression feature, and yet, this error is reported.


Example
_______

.. code-block:: php

   <?php
   
   // illustration example
   $object = new Stdclass;
   $string = 'abc';
   
   echo isset($string[$object]);
   
   ?>


Literal Examples
****************
+ Cannot access offset of type stdClass in isset or empty

Solutions
_________

+ Check the type of the index before using it in the array notation.
+ Check the type of the underlying object, using the array notation.
+ Cast the index to ``(string)`` or ``(int)`` when using it in the array notation.

Related Error Messages
______________________

+ :ref:`illegal-offset-type`
+ :ref:`illegal-offset-type-in-unset`
+ :ref:`illegal-offset-type-in-isset-or-empty`
