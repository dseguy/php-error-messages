.. _%s():-passing-null-to-parameter-#%:

%s(): Passing null to parameter #%d (%s) of type string is deprecated 
----------------------------------------------------------------------
 
	.. meta::
		:description:
			%s(): Passing null to parameter #%d (%s) of type string is deprecated : Since PHP 8.

		:og:type: article
		:og:title: %s(): Passing null to parameter #%d (%s) of type string is deprecated 
		:og:description: Since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-passing-null-to-parameter-%23%25.html

Description
___________
 
Since PHP 8.1, PHP has been enforcing non-null parameters to PHP native functions. Until then, it was possible to use NULL everywhere, and it would have been cast to an empty string or 0. Nowadays, it is a deprecation.

This applies to all PHP native functions, such as, and not limited to: strtolower(), strip_tags(), trim(), addslashes(), strlen(), rtrim(), etc.

Example
_______

.. code-block:: php

   <?php
   
   strlen(null);
   
   ?>


Literal Examples
****************
+ strlen(): Passing null to parameter #1 ($string) of type string is deprecated

Solutions
_________

+ Check the value before calling the function.
+ Use ``??`` to convert the null into a suitable default value.
