.. _call-to-undefined-function-each():

Call to undefined function each()
---------------------------------
 
.. meta::
	:description:
		Call to undefined function each(): each() used to be a PHP native function.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to undefined function each()
	:og:description: each() used to be a PHP native function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-each%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to undefined function each()
	:twitter:description: Call to undefined function each(): each() used to be a PHP native function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
each() used to be a PHP native function. It was deprecated in PHP 7.4, and is undefined since PHP 8.0.

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
+ Use ``yield``.
+ Use ``yield from``.
+ Use ``foreach()``.

Related Error Messages
______________________

+ :ref:`call-to-undefined-function`
+ :ref:`call-to-undefined-function-exit()`


In previous PHP versions, this error message used to be :ref:`the-each()-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls`.
