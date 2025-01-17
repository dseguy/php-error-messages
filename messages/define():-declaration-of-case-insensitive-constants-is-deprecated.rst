.. _define():-declaration-of-case-insensitive-constants-is-deprecated:

define(): Declaration of case-insensitive constants is deprecated
-----------------------------------------------------------------
 
.. meta::
	:description:
		define(): Declaration of case-insensitive constants is deprecated: The third argument of define() used to allow the creation of a case-insensitive global constant.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: define(): Declaration of case-insensitive constants is deprecated
		:og:description: The third argument of define() used to allow the creation of a case-insensitive global constant
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/define%28%29%3A-declaration-of-case-insensitive-constants-is-deprecated.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: define(): Declaration of case-insensitive constants is deprecated
		:twitter:description: define(): Declaration of case-insensitive constants is deprecated: The third argument of define() used to allow the creation of a case-insensitive global constant
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The third argument of define() used to allow the creation of a case-insensitive global constant. The constant in the code would have been accessible with `A` or `a`, without distinction. This feature has been deprecated in PHP 7.3 and abandoned in PHP 8.0. For backward compatibility, the third argument is not reported as an error, but a warning. The constant is not case insensitive any way. Adding a fourth argument is a fatal error, and has no meaning.

Example
_______

.. code-block:: php

   <?php
   
   define('A', 'b', true);
   
   ?>

Solutions
_________

+ Remove the third argument in the define() call.


In previous PHP versions, this error message used to be :ref:`define():-argument-#3-($case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported`.
