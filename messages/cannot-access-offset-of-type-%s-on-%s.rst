.. _cannot-access-offset-of-type-%s-on-%s:

Cannot access offset of type %s on %s
-------------------------------------
 
	.. meta::
		:description:
			Cannot access offset of type %s on %s: In an array notation, the offset may be a variable, or any container.

		:og:type: article
		:og:title: Cannot access offset of type %s on %s
		:og:description: In an array notation, the offset may be a variable, or any container
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-offset-of-type-%25s-on-%25s.html

Description
___________
 
In an array notation, the offset may be a variable, or any container. Yet, it must be a string or an integer; and when applied to an string, it must be an integer.

This error is reported when a value which type is not cast to integer (such as ``null``, ``boolean``, ``float``) or string is used. Here, it is an object. 

Note that a class that extends ``ArrayAccess`` interface allows the manipulation of any kind of key: this is possible, yet rare.

This error message has been extended to more types than ``string`` : for example, ``array``.


Example
_______

.. code-block:: php

   <?php
   
   // illustration example
   $object = new Stdclass;
   $string = 'abc';
   
   echo $string[$object];
   
   $array = [];
   echo $array[$object];
   
   function foo(A $a) {
       $string = 'abc';
       echo $string[$a];
   }
   
   ?>


Literal Examples
****************
+ Cannot access offset of type stdClass on string
+ Cannot access offset of type stdClass on array

Solutions
_________

+ Check the type of the index before using it in the array notation.
+ Check the type of the underlying object, using the array notation.
+ Cast the index to ``(string)`` or ``(int)`` when using it in the array notation.

Related Error Messages
______________________

+ :ref:`illegal-offset-type`


In previous PHP versions, this error message used to be :ref:`cannot-access-offset-of-type-%s-on-string`.
