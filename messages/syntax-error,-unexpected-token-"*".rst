.. _syntax-error,-unexpected-token-"*":

syntax error, unexpected token "*"
----------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "*": PHP accepts one star ``*``, for multiplication and two stars ``**``, for power, since PHP 7.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: syntax error, unexpected token &quot;*&quot;
		:og:description: PHP accepts one star ``*``, for multiplication and two stars ``**``, for power, since PHP 7
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%2A%22.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "*"
	:twitter:description: syntax error, unexpected token "*": PHP accepts one star ``*``, for multiplication and two stars ``**``, for power, since PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
PHP accepts one star ``*``, for multiplication and two stars ``**``, for power, since PHP 7.0. More stars are not supported as operator.


Example
_______

.. code-block:: php

   <?php
   
   // No such operator as 3 stars
   $a = 2 *** 3;
   
   ?>

Solutions
_________

+ Remove the superfluous star.
