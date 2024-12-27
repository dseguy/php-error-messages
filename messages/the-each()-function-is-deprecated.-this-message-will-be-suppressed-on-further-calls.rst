.. _the-each()-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls:

The each() function is deprecated. This message will be suppressed on further calls
-----------------------------------------------------------------------------------
 
	.. meta::
		:description:
			The each() function is deprecated. This message will be suppressed on further calls: The function ``each`` was deprecated in PHP 7.

		:og:type: article
		:og:title: The each() function is deprecated. This message will be suppressed on further calls
		:og:description: The function ``each`` was deprecated in PHP 7
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-each%28%29-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html

Description
___________
 
The function ``each`` was deprecated in PHP 7.x and removed in PHP 8.0. It was mainly used in loops like the above, and could be replaced advantageously with a ``foreach`` structure.

Example
_______

.. code-block:: php

   <?php
   
   $array = ['a', 'b'];
   while(list($key, $value) = each($array)) {
       print "$key => $value\n";
   }
   
   ?>

Solutions
_________

+ Replace the while loop with a foreach one.
+ Replace the loop with a call to one of the array function.
+ Traverse the array with a ``yield`` or ``yield from`` call.
+ Use an ``iterator`` to traverse the array.


In more recent PHP versions, this error message is now :ref:`call-to-undefined-function-each()`.
