.. _call-to-undefined-function-each():

Call to undefined function each()
---------------------------------
 
	.. meta::
		:description:
			Call to undefined function each(): each() used to be a PHP native function.

		:og:type: article
		:og:title: Call to undefined function each()
		:og:description: each() used to be a PHP native function
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-each%28%29.html

Description
___________
 
each() used to be a PHP native function. It was deprecated in PHP 8.0, and is now undefined.

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

+ Downgrade to PHP 7.x.
+ Use yield.
+ Use yield from.
+ Use foreach().

Related Error Messages
______________________

+ :ref:`call-to-undefined-function`


In previous PHP versions, this error message used to be :ref:`the-each()-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls`.
