.. _illegal-offset-type-in-unset:

Illegal offset type in unset
----------------------------
 
	.. meta::
		:description:
			Illegal offset type in unset: PHP only uses integers and strings as array index.

		:og:type: article
		:og:title: Illegal offset type in unset
		:og:description: PHP only uses integers and strings as array index
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/illegal-offset-type-in-unset.html

Description
___________
 
PHP only uses integers and strings as array index. While certain other types may be converted silently to those types, as ``null`` or ``boolean``, objects and arrays yield an illegal type for index.

This error is is specific to ``unset``: this function is usually very silent, yet an dedicated error message was created for the type check.

This error is reported at compile time when PHP can detect the type then, otherwise, it is reported at execution time.


Example
_______

.. code-block:: php

   <?php
   
   $array = [1];
   
   unset($array[[]]);
   
   ?>

Solutions
_________

+ Convert these types into a string or a integer first.
+ Cast these types into a string or a integer first.

Related Error Messages
______________________

+ :ref:`cannot-access-offset-of-type-%s-in-isset-or-empty`
+ :ref:`cannot-access-offset-of-type-%s-on-%s`
+ :ref:`illegal-offset-type`
+ :ref:`illegal-offset-type-in-isset-or-empty`
