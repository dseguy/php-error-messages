.. _cannot-unpack-array-with-string-keys:

Cannot unpack array with string keys
------------------------------------
 
	.. meta::
		:description:
			Cannot unpack array with string keys: Initialy, the ellipsis operator would only work with integer-indexed arrays, and not with string-indexed arrays.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot unpack array with string keys
		:og:description: Initialy, the ellipsis operator would only work with integer-indexed arrays, and not with string-indexed arrays
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unpack-array-with-string-keys.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot unpack array with string keys
	:twitter:description: Cannot unpack array with string keys: Initialy, the ellipsis operator would only work with integer-indexed arrays, and not with string-indexed arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
Initialy, the ellipsis operator would only work with integer-indexed arrays, and not with string-indexed arrays. This feature was introduced in PHP 8.1, and the error message then disappeared.

Example
_______

.. code-block:: php

   <?php
   
   $array = ['a' => 1, 2];
   $array2 = [...$array, 3];
   
   ?>

Solutions
_________

+ Upgrade the code to PHP 8.1 or newer.
+ Use array_keys() before using the ellipsis operator.
