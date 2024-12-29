.. _using-array_key_exists()-on-objects-is-deprecated.:

Using array_key_exists() on objects is deprecated.
--------------------------------------------------
 
	.. meta::
		:description:
			Using array_key_exists() on objects is deprecated.: array_key_exists() used to accept both arrays and objects.

		:og:type: article
		:og:title: Using array_key_exists() on objects is deprecated.
		:og:description: array_key_exists() used to accept both arrays and objects
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-array_key_exists%28%29-on-objects-is-deprecated..html

Description
___________
 
array_key_exists() used to accept both arrays and objects. In array cases, it looks for an index in the array keys, and in the object case, it looks for a property in the public properties. 

array_key_exists() only works with array: it doesn't work with ArrayAccess object, and yields the same error.

In PHP 7.4, this feature was deprecated, with the eponymous message. In PHP 8.0, it is now turned into a type error: the second argument must be an array.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public string $property = '';
   }
   
   $object = new X();
   
   array_key_exists($object, 'index');
   
   ?>

Solutions
_________

+ Check if the variable is actually an object before using it with array_key_exists().
+ Check if the variable is actually an object before using it with array_key_exists().

Related Error Messages
______________________

+ :ref:`argument-#%d-($%s)-must-be-of-type-%s,-%s-given`


In more recent PHP versions, this error message is now :ref:`argument-#%d-($%s)-must-be-of-type-%s,-%s-given`.
