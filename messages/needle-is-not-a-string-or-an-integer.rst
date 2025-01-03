.. _needle-is-not-a-string-or-an-integer:

needle is not a string or an integer
------------------------------------
 
	.. meta::
		:description:
			needle is not a string or an integer: The second argument may be a string, or an integer, which will be used as a string.

		:og:type: article
		:og:title: needle is not a string or an integer
		:og:description: The second argument may be a string, or an integer, which will be used as a string
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/needle-is-not-a-string-or-an-integer.html

Description
___________
 
The second argument may be a string, or an integer, which will be used as a string. Any other type is forbidden, in particular array. Other types may yield other error messages, such as a type error.

Example
_______

.. code-block:: php

   <?php
   
   print strpos('abc99', []);
   
   ?>

Solutions
_________

+ Use a foreach on an array of strings, and use these values instead.
+ Pick up a value in the array.

Related Error Messages
______________________

+ :ref:`non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr()-call-to-preserve-the-current-behavior`
