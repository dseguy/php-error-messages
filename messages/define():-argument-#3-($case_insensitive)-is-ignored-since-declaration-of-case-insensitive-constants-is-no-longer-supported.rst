.. _define():-argument-#3-(\$case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported:

define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
---------------------------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported: The third argument of define() used to allow the creation of a case-insensitive global constant.

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


In more recent PHP versions, this error message is now :ref:`define():-declaration-of-case-insensitive-constants-is-deprecated`.
