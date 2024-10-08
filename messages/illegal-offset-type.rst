.. _illegal-offset-type:

Illegal offset type
-------------------
 
	.. meta::
		:description lang=en:
			Illegal offset type: PHP only uses integers and strings as array index.

Description
___________
 
PHP only uses integers and strings as array index. While certain other types may be converted silently to those types, as ``null`` or ``boolean``, objects and arrays yield an illegal type for index.

This error is reported at compile time when PHP can detect the type then, otherwise, it is reported at execution time.


Example
_______

.. code-block:: php

   <?php
   
   $a = new Stdclass;
   
   $array = [$a => 2];
   
   $array[$a] = 1;
   
   $array[$array] = 3;
   
   ?>

Solutions
_________

+ Convert these types into a string or a integer first.
+ Cast these types into a string or a integer first.
